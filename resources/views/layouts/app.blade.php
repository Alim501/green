<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--slider--}}
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div id="app">
    <div style="background-color: #7da500; height: 5px; "></div>
   <a href="{{url('page/contact')}}" class="ostavit float-right btn btn-success rounded" style="margin-bottom: -20px"> Оставить заявку</a>
    <section id="header"> {!! \App\utils\Helper::renderBlocks('header') !!} </section>
    <section id="menu"> {!! \App\utils\Helper::renderBlocks('menu') !!} </section>

    <section id="content">

        @yield('content')

    </section>


    <section id="main"> {!! \App\utils\Helper::renderBlocks('main') !!}  </section>

    <section id="footer"> {!! \App\utils\Helper::renderBlocks('footer') !!}  </section>
</div>
</body>
</html>
