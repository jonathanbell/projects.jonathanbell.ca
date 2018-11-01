@extends('layouts.app')

@section('content')

    <h2>
        Projects
        <span class="cube">
            <span class="face"></span>
            <span class="face"></span>
            <span class="face"></span>
            <span class="face"></span>
            <span class="face"></span>
            <span class="face"></span>
        </span>
    </h2>

    <p>I enjoy writing code that solves your problems.</p>
    <p>I've worked on many types of projects both professional and personal. Here are some projects I've created either on my own or while working on a team.</p>

    <ul class="projects-wrapper">
        @foreach($projects as $project)
            @include('components.project')
        @endforeach
    </ul>

@endsection
