@extends('layouts.adminApp')

@section('content')

<nav>
    <div>
        <h6>'</h6>
    </div>
</nav>
@if (session('message'))
    <div class="alert alert-info">{{ session('message') }}</div>
@endif
@foreach($errors->all() as $error)
    <div class="text-danger h4 font-weight-bolder">{{ $error }}</div>
@endforeach
<div class="container">
    @foreach($pages as $page)
        @endforeach
    <form action="{{route("page.update",$page->id)}}" method="post">
        @method('PUT')
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleFormControlInput1">Название</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$page->name}}" name="name" placeholder="Название блока">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Опубликовано</label>
            <div class="form-check">
                <input @if($page->publicated==1) checked @endif class="form-check-input" type="radio" name="publicated" id="exampleRadios1" value="1">
                <label class="form-check-label" for="exampleRadios1">
                    Да
                </label>
            </div>
            <div class="form-check">
                <input  @if($page->publicated==0) checked @endif class="form-check-input" type="radio" name="publicated" id="exampleRadios2" value="0">
                <label class="form-check-label" for="exampleRadios2">
                    Нет
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Главная</label>
            <div class="form-check">
                <input @if($page->main==1) checked @endif class="form-check-input" type="radio" name="main" id="Radios1" value="1">
                <label class="form-check-label" for="Radios1">
                    Да
                </label>
            </div>
            <div class="form-check">
                <input  @if($page->main==0) checked @endif class="form-check-input" type="radio" name="main" id="Radios2" value="0">
                <label class="form-check-label" for="Radios2">
                    Нет
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Индеkс</label>
            <input class="form-control rounded" id="exampleFormControlSelect1" placeholder="Необязязательное поле" type="text" name="slug" value="{{$page->slug}}">
        </div>
        <div class="form-group">
            <label for="summernote">Содержание</label>
            <textarea  name="content" class="form-control" id="summernote" rows="3" >{{$page->content}}
        </textarea>
        </div>
        <button type="submit" class="btn-success btn-lg">Cохранить</button>
        <a href="{{route('page.index')}}" class="btn-info btn-lg">Назад</a>
    </form>



    </div>
@endsection
