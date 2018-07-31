<?php

namespace Portfolio\Http\Controllers\Admin;

use Image;
use Storage;
use Portfolio\Tag;
use Portfolio\Project;
use Illuminate\Http\Request;
use Portfolio\Http\Controllers\Controller;
use Portfolio\Http\Requests\SaveProjectRequest;
use Portfolio\Http\Requests\UpdateProjectRequest;

class ProjectsController extends Controller
{
    public function index()
    {
    	$projects = Project::select('id', 'name', 'url', 'image_small', 'image_medium')->with('tags')->orderBy('created_at', 'DESC')->paginate(12);

    	return view('admin.projects.dashboard', compact('projects'));
    }

    public function create()
    {	
    	$tags = Tag::select('id', 'name')->where('parent','project')->get()->sortBy('name');
    	return view('admin.projects.create', compact('tags'));
    }

    public function store(SaveProjectRequest $request)
    {
    	$file = $request->file('image');

    	if (!$request->file('image')->isValid()) {
    		return redirect()->route('admin.project.create')
    						 ->withErrors(['error'=>'Error uploading file'])
    						 ->withInput();
    	}

    	$path = 'images/' . date('Y') . '/' . date('m') . '/';
    	$storePath = storage_path('app/public/'.$path);

    	if (!file_exists($storePath)) {
            mkdir($storePath, 0755, true);
        }

    	$name = str_random(32);

    	try {
    		$this->uploadImages($request, $storePath, $name);

			$project = new Project();
	    	$project->name = $request->name;
	    	$project->url = $request->url;
	    	$project->description = $request->description;
	    	$project->image = $path . $name . '.jpg';
            $project->image_small = $path . $name . '_sm_thumbnail.jpg';
	    	$project->image_medium = $path . $name . '_med_thumbnail.jpg';
	    	$project->save();

	    	$project->tags()->sync($request->input('tags'));

	    	return redirect()->route('admin.projects.dashboard');

    	} catch (\Exception $e) {
    		return redirect()->route('admin.project.dashboard')
    						 ->withErrors(['error'=>'Error saving file'])
    						 ->withInput();
    	}
    }

    public function edit(Project $project)
    {
        $tags = Tag::select('id', 'name')->where('parent','project')->get()->sortBy('name');
        return view('admin.projects.edit', ['project'=>$project, 'tags'=>$tags]);
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->name = $request->name;
        $project->url = $request->url;
        $project->description = $request->description;

        $file = $request->file('image');

        if ($request->has('image')) {
            if (!$request->file('image')->isValid()) { dd('yp_order(domain, map)');
                return redirect()->route('admin.projects.edit')
                                 ->withErrors(['error'=>'Error uploading file'])
                                 ->withInput();
            }

            $path = 'images/' . date('Y') . '/' . date('m') . '/';
            $storePath = storage_path('app/public/'.$path);
            
            if (!file_exists($storePath)) {
                mkdir($storePath, 0755, true);
            }

            $name = str_random(32);

            try {
                $this->uploadImages($request, $storePath, $name);
                Storage::disk('public')->delete($project->image);
                Storage::disk('public')->delete($project->image_small);
                Storage::disk('public')->delete($project->image_medium);

                $project->image = $path . $name . '.jpg';
                $project->image_small = $path . $name . '_sm_thumbnail.jpg';
                $project->image_medium = $path . $name . '_med_thumbnail.jpg';
                
            } catch(\Exception $e) {
                return redirect()->route('admin.projects.edit')
                                 ->withErrors(['error'=>'Error uploading file'])
                                 ->withInput();
            }
        }

        $project->save();
        $project->tags()->sync($request->input('tags'));
        
        return redirect()->route('admin.projects.dashboard');
    }

    private function uploadImages(Request $request, $storePath, $name)
    {
        $img = Image::make($request->file('image')->getRealPath())->save($storePath . $name . '.jpg')->destroy();
        Image::make($request->file('image')
                            ->getRealPath())
                            ->fit(400, 300, function ($constraint) {
                                $constraint->aspectRatio();
                                $constraint->upsize();
                            })->save($storePath . $name . '_sm_thumbnail.jpg')->destroy();

        Image::make($request->file('image')
                            ->getRealPath())
                            ->fit(600, 500, function ($constraint) {
                                $constraint->aspectRatio();
                                $constraint->upsize();
                            })->save($storePath . $name . '_med_thumbnail.jpg')->destroy();
    }

    public function delete(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.dashboard');
    }
}
