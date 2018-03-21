@extends('layouts.app')

@section('content')
<div class="container courses-dashboard">
	<div class="row mb-3">
		<div class="col">
			<a href="{{ route('admin.courses.create') }}" class="btn btn-outline-info btn-lg float-right">Add Course</a>
		</div>
	</div>
    <div class="row">
    	@foreach($courses as $course)
    		<div class="col-lg-3 col-md-4 col-sm-12 course mb-3" data-href="{{ route('admin.course.edit', $course->id) }}">
    			<div class="card">
					<div class="card-body">
					    <h5 class="card-title"><p>{{ $course->name }}</p></h5>
					    <h6 class="card-subtitle mb-2 text-muted"><p>{{ !is_null($course->year) ? $course->year : 'In Progress' }}</p></h6>					    
					</div>
				</div>
    		</div>
    	@endforeach
    </div>
</div>
@endsection
