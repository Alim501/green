@extends('layouts.app')

@section('content')
    <section id="image" style="height: 150px" > {!! \App\utils\Helper::renderBlocks('image') !!}  </section>
    <div class="container">
        {!! $page->content !!}
    </div>
@endsection
