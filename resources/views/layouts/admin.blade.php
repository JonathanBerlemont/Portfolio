<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portfolio Admin</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="row p-0 m-0">
        <div class="col-2 d-flex flex-column bg-dark" style="height: 100vh; position: fixed">
            <a href="/" class="btn btn-light my-5">View Portfolio</a>
            <a href="/admin/projects" class="btn btn-light py-3 mt-5">Projects</a>
            <a href="/admin/skills" class="btn btn-light py-3 mt-3">Skills</a>
            <a href="/admin/experiences" class="btn btn-light py-3 mt-3">Experiences</a>
        </div>
        <div class="offset-2 col-10 p-3">
            @yield('content')
        </div>
    </div>
</body>
</html>