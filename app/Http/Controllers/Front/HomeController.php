<?php

namespace Portfolio\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Portfolio\Course;
use Portfolio\Http\Controllers\Controller;
use Portfolio\Project;

class HomeController extends Controller
{
    public function index(Request $request)
    {
    	$projects = Cache::rememberForever('projects', function() {
            $projects = Project::select('id', 'name', 'url', 'image_small')->with('tags')->orderBy('created_at', 'DESC')->get();
            return $projects;
        });
    	
    	if ($request->ajax()) {
            return view('project-list', compact('projects'))->render();  
        }

		$courses = Cache::rememberForever('courses', function(){
            $courses = Course::orderBy('year', 'DESC')->get();
            return $courses;
        });
        
    	return view('front', compact('projects', 'courses'));
    }
}
