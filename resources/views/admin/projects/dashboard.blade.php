@extends('layouts.app')

@section('content')
<div class="container projects-dashboard">
	<div class="row mb-3">
		<div class="col">
			<a href="{{ route('admin.projects.create') }}" class="btn btn-outline-info btn-lg float-right">Add Project</a>
		</div>
	</div>
    <div class="row">
    	@foreach($projects as $project)
    		<div class="col-lg-3 col-md-4 col-sm-12 project" data-href="{{ route('admin.projects.edit', $project->id) }}">
                <picture>
                  <source media="(max-width: 767px)" srcset="{{ asset('storage/'.$project->image_medium) }}">
                  <img src="{{ asset('storage/'.$project->image_small) }}" alt="{{ $project->name }}" style="width:auto;">
                </picture>
    			<p>{{ $project->name }}</p>
    		</div>
    	@endforeach
    </div>
</div>
@endsection
