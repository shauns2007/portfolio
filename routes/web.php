<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Front\HomeController@index')->name('front.home');

Route::post('/contact', 'Front\ContactController@create')->name('front.contact');
Route::get('/projects/{project}', 'Front\ProjectController@view')->name('project.view');

Auth::routes();
Route::prefix('admin')->middleware(['auth'])->group(function(){
	Route::get('dashboard', 'HomeController@index')->name('home');

	Route::get('projects', 'Admin\ProjectsController@index')->name('admin.projects.dashboard');
	Route::get('projects/create', 'Admin\ProjectsController@create')->name('admin.projects.create');
	Route::post('projects/store', 'Admin\ProjectsController@store')->name('admin.project.store');
	Route::get('projects/{project}/edit', 'Admin\ProjectsController@edit')->name('admin.projects.edit');
	Route::put('projects/{project}/update', 'Admin\ProjectsController@update')->name('admin.project.update');
	Route::get('projects/{project}/delete', 'Admin\ProjectsController@delete')->name('admin.project.delete');

	Route::get('courses', 'Admin\CoursesController@index')->name('admin.courses.dashboard');
	Route::get('courses/create', 'Admin\CoursesController@create')->name('admin.courses.create');
	Route::get('courses/{course}/edit', 'Admin\CoursesController@edit')->name('admin.course.edit');
	Route::post('courses/store', 'Admin\CoursesController@store')->name('admin.course.store');
	Route::post('courses/{course}/update', 'Admin\CoursesController@update')->name('admin.course.update');
	Route::get('courses/{course}/delete', 'Admin\CoursesController@delete')->name('admin.course.delete');
});




