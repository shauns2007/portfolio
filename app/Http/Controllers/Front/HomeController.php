<?php

namespace Portfolio\Http\Controllers\Front;

use Portfolio\Project;
use Portfolio\Course;
use Illuminate\Http\Request;
use Portfolio\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request)
    {
    	$projects = Project::select('id', 'name', 'url', 'image_small')->with('tags')->orderBy('created_at', 'DESC')->paginate(4);
    	
    	if ($request->ajax()) {
            return view('project-list', compact('projects'))->render();  
        }

		$courses = Course::orderBy('year', 'DESC')->get();
    	return view('front', compact('projects', 'courses'));
    }
}
