<ul class="clearfix">
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
            <article>
                <img src="{{ asset('storage/'.$project->image_small) }}" class="img-fluid" alt="{{ $project->name }}">
                <p>{{ $project->name }}</p>
            </article>
        </li>
        @endforeach
    @endif
</ul>
{{ $projects->links() }}