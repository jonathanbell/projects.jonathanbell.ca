@extends('layouts.app')

@section('content')

    @include('errors.errors')

    <h2>Add a new project</h2>

    <form action="/admin" method="POST">
        {{ csrf_field() }}

        <label for="title">Title:</label><br>
        <input placeholder="Project title" type="text" id="title" name="title" required><br>

        <label for="desription">Description:</label><br>
        <textarea placeholder="HTML is allowed" name="description" id="description"></textarea><br>

        <label for="tools">Tools used:</label><br>
        <input type="text" id="tools" name="tools" placeholder="Comma seperated list please"><br>

        <label for="url">Link:</label><br>
        <input placeholder="URI to project example" type="url" id="url" name="url" required><br>

        <label for="start_date">Start date:</label><br>
        <input type="date" id="start_date" name="start_date" required><br>

        <label for="major">Major project:</label>
        <input style="margin-left: 0.5rem;" type="checkbox" id="major" name="major" value="true" checked><br>

        <button type="submit">Submit</button>
    </form>

    <h2>Update an existing project</h2>

    <ul class="admin-links">
        @foreach ($projects as $project)
            <li>Update: <a href="/admin/{{ $project->id }}">{{ $project->title }}</a></li>
        @endforeach
    </ul>

    <h2>Delete a project</h2>

    <!-- Form action is set with JS. -->
    <form method="POST" action="/null" id="delete-form" onsubmit="if(this.action.includes('null')) { alert('Select a project to delete!'); return false; }">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        @foreach ($projects as $project)
            <input onchange="document.getElementById('delete-form').action = '/admin/' + this.id;" class="delete-radio-button" type="radio" id="{{ $project->id }}" name="delete_id">
            <label for="{{ $project->id }}">{{ $project->title }}</label><br>
        @endforeach

        <button type="submit">Submit</button>
    </form>

@endsection
