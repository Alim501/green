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
</head>
<body>
<div id="app">
    <div style="background-color: #7da500; height: 5px; "><a href="{{url('page/contact')}}" class="float-right btn btn-success rounded" style="margin-bottom: -20px"> Оставить заявку</a></div>

    <section id="header"> {!! \App\utils\Helper::renderBlocks('header') !!} </section>
    <section id="menu"> {!! \App\utils\Helper::renderBlocks('menu') !!} </section>
    <section id="image" style="height: 150px" > {!! \App\utils\Helper::renderBlocks('image') !!}  </section>


    <div class=" container py-5" >
        <div class="w-75">
        <h1 style="    margin-block-start: 0.83em;">Оставить заявку</h1>
        <form action="{{url('/contact')}}" method="Post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Ваше имя</label>
                <input class="form-control" type="text" name="name" placeholder="" id="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Ваш еmail-адрес </label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="theme">Тема</label>
                <input class="form-control" id="theme" type="text" name="theme" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Сообщение</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn-success btn">Отправить</button>
        </form>
        </div>
    </div>


    <section id="main"> {!! \App\utils\Helper::renderBlocks('main') !!}  </section>
    <section id="footer"> {!! \App\utils\Helper::renderBlocks('footer') !!}  </section>
</div>
</body>
</html>
