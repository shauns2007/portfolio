@extends('layouts.app')

@section('content')
<div class="container create-project">
    <div class="row justify-content-center">
    	<p class="lead">
		  Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
		</p>
        <div class="col-md-8">
        	<form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        		@csrf
        		@method('PUT')
        		<div class="form-group">
        			<div class="input-group">
        				<div class="input-group-prepend">
    						<span class="input-group-text">Project Name</span>
  						</div>
  						<input type="text" class="form-control" name="name" id="name" value="{{ old('name', $project->name) }}" data-validate="required">
        			</div>
        			<small class="form-text text-muted">
	    				@if ($errors->has('name'))
	    					{{ $errors->first('name') }}
	    				@endif
    				</small>			    
				</div>
				<div class="form-group">
					<div class="input-group">
        				<div class="input-group-prepend">
    						<span class="input-group-text">Web Address</span>
  						</div>
  						<input type="text" class="form-control" name="url" value="{{ old('url', $project->url) }}" data-validate="url">
        			</div>
        			<small class="form-text text-muted">
	        			@if ($errors->has('url'))
	    					{{ $errors->first('url') }}
	    				@endif
    				</small>
				</div>
				<div class="form-group">
					<div class="input-group mb-3" name="tags">
        				<div class="input-group-prepend">
    						<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tags</button>
							<div class="dropdown-menu tags-menu">
								@foreach ($tags as $tag)
							      <span data-value="{{ $tag->id }}" class="dropdown-item">{{ $tag->name }}</span>
							    @endforeach
							</div>		
  						</div>
  						<div class="form-control" readonly>
  							<ul class="selected-tags clearfix">
  								@foreach ($tags as $tag)
  									{!! (collect(old('tags', $project->tags->keyBy('id')->keys()))->contains($tag->id)) ? '<li class="selected-tag" data-value='.$tag->id.'><span>'.$tag->name.'</span><i class="fas fa-times"></i></li>':'' !!}
  								@endforeach
  							</ul>
  						</div>
        			</div>
				    <select multiple class="form-control d-none" name="tags[]" data-validate="required">
				    	@foreach ($tags as $tag)
					      <option value="{{ $tag->id }}" {{ (collect(old('tags', $project->tags->keyBy('id')->keys()))->contains($tag->id)) ? 'selected':'' }}>{{ $tag->name }}</option>
					    @endforeach
				    </select>
				    <small class="form-text text-muted">
					    @if ($errors->has('tags'))
			    			{{ $errors->first('tags') }}
			    		@endif
		    		</small>
				</div>
				<div class="form-group desc">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Description</span>
						</div>
						<textarea class="form-control" name="description" data-validate="required|min:8">{{ old('description', $project->description) }}</textarea>
					</div>
					<small class="form-text text-muted">
						@if ($errors->has('description'))
	    					{{ $errors->first('description') }}
	    				@endif
    				</small>
				</div>
				<div class="form-group">
				    <div class="input-group">
				    	<div class="input-group-prepend file">
							<span class="input-group-text">Project Image</span>
						</div>
						<div class="custom-file">
							<input type="file" name="image" class="custom-file-input" id="inputGroupFile04">
							<label class="custom-file-label" for="inputGroupFile04"></label>
						</div>
					</div>
					<small class="form-text text-muted">
						@if ($errors->has('image'))
	    					{{ $errors->first('image') }}
	    				@endif
    				</small>
				 </div>
				 <a href="#" class="btn btn-info btn-lg float-right update-project-btn ml-3" data-rel="update">Submit</a>
				 <a href="{{ route('admin.projects.dashboard') }}" class="btn btn-info ml-3 btn-lg float-right">Cancel</a>
				 <a href="{{ route('admin.project.delete',  $project->id) }}" class="btn btn-danger btn-lg float-right delete-project-btn" data-rel="delete">Delete</a>
        	</form>
        </div>
    </div>
</div>
@endsection
