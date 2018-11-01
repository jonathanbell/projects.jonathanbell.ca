@extends('layouts.app')

@section('content')

    <h2>Update {{ $project->title }}</h2>

    <form action="/admin/{{ $project->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <label for="title">Title:</label><br>
        <input value="{{ $project->title }}" type="text" id="title" name="title" required><br>

        <label for="desription">Description:</label><br>
        <textarea name="description" id="description">{!! $project->description !!}</textarea><br>

        <label for="tools">Tools used:</label><br>
        <input value="@include('components.tools')" type="text" id="tools" name="tools"><br>

        <label for="url">Link:</label><br>
        <input value="{{ $project->url }}" type="url" id="url" name="url" required><br>

        <label for="start_date">Start date:</label><br>
        <input value="{{ date('Y-m-d', $project->start_date) }}" type="date" id="start_date" name="start_date" required><br>

        <label for="major">Major project:</label>
        <input @if($project->major) value="true" checked @else value="" @endif style="margin-left: 0.5rem;" type="checkbox" id="major" name="major"><br>

        <button type="submit">Update</button>
    </form>

   @include('errors.errors')

@endsection
