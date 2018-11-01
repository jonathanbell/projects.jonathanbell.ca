<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ config('app.description', 'Jonathan Bell\'s web portfolio.') }}"/>
    <meta name="rating" content="general">
    <meta name="robots" content="index, follow, all">
    <meta name="keywords" content="Jonathan, Bell, web, developer, designer, Victoria, BC, Canada, front-end web development, coffee, just kidding, we all know, these keywords do nothing.">
    <meta name="author" content="Jonathan Bell">

    <title>{{ config('app.name', 'Jonathan Bell') }}</title>

    <link rel="dns-prefetch" href="https://fonts.googleapis.com">

    {{-- <link href="{{ asset('app.css') }}" rel="stylesheet"> --}}
    <link href="/app.css" rel="stylesheet">

    {{-- <script src="{{ asset('app.js') }}" defer></script> --}}
    <script src="/app.js" defer></script>
</head>
<body>
    @include('components.nav')

    <main>
        @include('components.statuses')
        @yield('content')
        @include('components.footer')
    </main>

</body>

<!-- No one intends to make bad software. -->
</html>
