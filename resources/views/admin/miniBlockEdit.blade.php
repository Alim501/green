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
                <form action="{{route("miniBlock.update",$miniBlock->id)}}" method="post">
                    @method('PUT')
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Опубликовано</label>
                        <div class="form-check">
                            <input @if($miniBlock->publicated==1) checked @endif class="form-check-input" type="radio" name="publicated" id="exampleRadios1" value="1">
                            <label class="form-check-label" for="exampleRadios1">
                                Да
                            </label>
                        </div>
                        <div class="form-check">
                            <input  @if($miniBlock->publicated==0) checked @endif class="form-check-input" type="radio" name="publicated" id="exampleRadios2" value="0">
                            <label class="form-check-label" for="exampleRadios2">
                                Нет
                            </label>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label  for="Number">Порядковый номер</label>
                        <input class="form-control rounded text-muted" id="Number" value="{{$miniBlock->order}}" placeholder="Порядковый номер" type="number" name="order">
                    </div>
                    <div class="form-group ">
                        <label  for="image">Картинка</label>
                        <input class="form-control rounded text-muted" id="image" value="{{$miniBlock->image}}"  type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label for="summernote1">Заголовок</label>
                        <textarea  name="title" class="form-control" id="summernote1" >{{$miniBlock->title}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="summernote">Содержание</label>
                        <textarea  name="content" class="form-control" id="summernote" >{{$miniBlock->content}}</textarea>
                    </div>

                    <button type="submit" class="btn-success btn-lg">Cохранить</button>
                    <a href="{{route('block.index')}}"  class="btn-info btn-lg">Назад</a>
                </form>

            </div>
        </div>
    </div>

@endsection
