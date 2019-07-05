@extends('layouts.app')

@section('content')
@include('slider')

<section id="header"> {!! \App\utils\Helper::renderMainBlocks('header') !!} </section>
<section id="main"> {!! \App\utils\Helper::renderMainBlocks('main') !!}  </section>
<section id="footer"> {!! \App\utils\Helper::renderMainBlocks('footer') !!}  </section>
    <div class="container ">
        <div class="row">
            <div class="col-3 py-5">
                <div class="rounded-circle icon mx-auto border" style=" background-image: url({{ url('/uploads/blocks/1562219137.png')}})"></div>
                <h5 class="my-3 text-center">Ландшафтный дизайн</h5>
                <div class="text-center">Ландшафтное проектирование, иллюстрация проектов</div>
            </div>
        </div>
    </div>
@endsection
