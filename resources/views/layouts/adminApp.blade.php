<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
</head>
<body>

<nav class="navbar navbar-light fixed-top bg-light flex-md-nowrap p-0 shadow">
    <div class="container">
    <div class="row">
        <div>
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{url('admin')}}">Admin panel</a>
        </div>
    <a href="{{url('admin/page')}}" class="text-muted nav-link">Cтраницы</a>
    <a href="{{url('admin/block')}}" class="text-muted nav-link">Блоки</a>
        <a href="{{url('admin/menu')}}" class="text-muted nav-link">Меню</a>
    </div>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
    </div>
</nav>

        <main class="py-4">
            @yield('content')
        </main>

<script>
    $('#summernote').summernote({
        placeholder: 'Hello',
        tabsize: 2,
        height: 100
    });
</script>
<script>
    $('#summernote1').summernote({
        placeholder: 'Hello',
        tabsize: 2,
        height: 100
    });
</script>
</body>
</html>
