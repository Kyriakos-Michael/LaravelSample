@extends('layout')


@section('content')

        <h1>Edit Project</h1>


            <form method="POST" action="/projects/{{ $project->id }}">

                @method('PATCH');
                @csfr
                {{-- @method('DELETE'); --}}
              
                
                <div>
                    <label class="label" for="title">Title</label>
                </div>

                <div>
                    <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}" />
                </div>

                <div>
                    <textarea>{{ $project->description }}</textarea>
                </div>

                <div>
                    <button type="submit">Update Project</button>
                </div>

                <a href="/projects/{{ $project->id }}" type="submit"> Delete a Project <a>
            </form>


@endsection