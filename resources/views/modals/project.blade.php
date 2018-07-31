<div class="modal-content">
    <div class="modal-header">
        <h1>{{$project->name}}</h1>
    </div>
    <div class="modal-body">
        <div class="project">
            <div class="project-left">
                <img src="{{ asset('storage/'.$project->image_medium) }}" />
            </div>
            <div class="project-right">
                <h4>Technologies</h4>
                <ul>
                    @foreach ($project->projectTags() as $tag) 
                        @if (($icon = returnIcon($tag->name)) != '')
                            <li style="color: #17a2b8"><i class="{{ $icon }}" title="{{ $tag->name }}"></i></li>
                        @endif
                @endforeach
                </ul>
                <h4>Description</h4>
                <p>{{$project->description}}</p>
                @isset($project->url)
                <p>Click <a href="{{$project->url}}" target="_blank">here</a> to visit the project.</p>
                @endisset
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="btn btn-danger ml-3 btn-lg float-right modal-close-btn">Close</a>
    </div>
</div>