<h1>Projects</h1>


<p>
    @foreach ($projects as $project)
    <li>
        {{ $project->title }}
    </li>
    @endforeach
</p>