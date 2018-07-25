<ul class="clearfix project-list">
    @if ($projects->count())
        @foreach ($projects as $project)
        <li>
            <ul class="project-tag-list">
                @foreach ($project->projectTags() as $tag) 
                    @if (($icon = returnIcon($tag->name)) != '')
                        <li style="color: #17a2b8"><i class="{{ $icon }}" title="{{ $tag->name }}"></i></li>
                    @endif
                @endforeach
            </ul>
            <article data-id="{{$project->id}}">
                <img src="{{ asset('storage/'.$project->image_small) }}" class="img-fluid" alt="{{ $project->name }}">
                <p>{{ $project->name }}</p>
            </article>
        </li>
        @endforeach
    @else
        <li class="no-content">No projects have been added yet</li>
    @endif
</ul>
{{ $projects->links() }}