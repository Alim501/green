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
@foreach($blocks as $block)
@endforeach
    <div class="container">
        <div class="row">
            <h2>Редактируемый блок</h2>
            <div class="table-responsive">
        <form action="{{route("block.update",$block->id)}}" method="post">
        @method('PUT')
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Название</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$block->name}}" name="name" placeholder="Название блока">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Опубликовано</label>
                    <div class="form-check">
                        <input @if($block->publicated==1) checked @endif class="form-check-input" type="radio" name="publicated" id="exampleRadios1" value="1">
                        <label class="form-check-label" for="exampleRadios1">
                            Да
                        </label>
                    </div>
                    <div class="form-check">
                        <input  @if($block->publicated==0) checked @endif class="form-check-input" type="radio" name="publicated" id="exampleRadios2" value="0">
                        <label class="form-check-label" for="exampleRadios2">
                            Нет
                        </label>
                    </div>
                </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Часть главной</label>
                <div class="form-check">
                    <input @if($block->main==1) checked @endif class="form-check-input" type="radio" name="main" id="exampleRadios3" value="1">
                    <label class="form-check-label" for="exampleRadios3">
                        Да
                    </label>
                </div>
                <div class="form-check">
                    <input  @if($block->main==0) checked @endif class="form-check-input" type="radio" name="main" id="exampleRadios4" value="0">
                    <label class="form-check-label" for="exampleRadios4">
                        Нет
                    </label>
                </div>
            </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Секция</label>
                    <select class="form-control" name="container">
                        @foreach($lists as $list)
                            <option @if($block->container==$list) selected @endif class="text-muted" value="{{$list}}">{{$list}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group ">
                    <label  for="Number">Порядковый номер</label>
                    <input class="form-control rounded text-muted" id="Number" value="{{$block->order}}" placeholder="Порядковый номер" type="number" name="order">
                </div>
            <div class="form-group">
                <label for="summernote1">Заголовок</label>
                <textarea  name="title" class="form-control" id="summernote1" >{{$block->title}}</textarea>
            </div>
                <div class="form-group">
                    <label for="summernote">Содержание</label>
                    <textarea  name="content" class="form-control" id="summernote" >{{$block->content}}</textarea>
                </div>

                <button type="submit" class="btn-success btn-lg">Cохранить</button>
            <a href="{{route('block.index')}}"  class="btn-info btn-lg">Назад</a>
            </form>

            </div>
        </div>
    </div>

@endsection
