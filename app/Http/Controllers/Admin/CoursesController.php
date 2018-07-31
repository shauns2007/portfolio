<?php

namespace Portfolio\Http\Controllers\Admin;

use Portfolio\Tag;
use Portfolio\Course;
use Illuminate\Http\Request;
use Portfolio\Http\Controllers\Controller;
use Portfolio\Http\Requests\SaveCourseRequest;
use Portfolio\Http\Requests\UpdateCourseRequest;

class CoursesController extends Controller
{
    public function index()
    {
    	$courses = Course::paginate(8);
    	return view('admin.courses.dashboard', compact('courses'));
    }

    public function create()
    {
    	$years = array_reverse(range(2010, date('Y')));
    	$tags = Tag::select('id', 'name')->where('parent','course')->get()->sortBy('name');
    	return view('admin.courses.create', ['tags'=>$tags,'years'=>$years]);
    }

    public function store(SaveCourseRequest $request)
    {
    	$course = Course::create([
    		'name'		=> $request->name,
    		'url'		=> $request->url,
    		'year'		=> $request->year,
    		'completed'	=> $request->completed,
    	]);

    	$course->tags()->sync($request->tags);

    	return redirect()->route('admin.courses.dashboard');
    }

    public function edit(Course $course)
    {
    	$years = array_reverse(range(2010, date('Y')));
    	$tags = Tag::select('id', 'name')->where('parent','course')->get()->sortBy('name');
    	return view('admin.courses.edit', ['tags'=>$tags,'years'=>$years,'course'=>$course]);
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
    	$course->fill($request->all());
    	$course->save();

    	$course->tags()->sync($request->tags);

    	return redirect()->route('admin.courses.dashboard');
    }

    public function delete(Course $course)
    {
    	$course->delete();
    	return redirect()->route('admin.courses.dashboard');
    }
}
