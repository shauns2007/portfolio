<?php

namespace Portfolio\Http\Controllers\Front;

use Portfolio\Project;
use Illuminate\Http\Request;
use Portfolio\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index(Request $request)
    {

    }

    public function view(Project $project)
    {
    	return view('modals.project', compact("project"))->render();
    }
}
