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
    @foreach($menu as $menuSection)


    <div class="container">
        <div class="row">
            <h2>Редактируемая ссылка</h2>
            <div class="table-responsive">
                <form action="{{route("menu.update",$menuSection->id)}}" method="post">
                    @method('PUT')
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Название</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$menuSection->name}}" name="name" placeholder="Название блока">
                    </div>
                    <div class="form-group">
                        <label for="link">Ccылка</label>
                        <input name="link" class="form-control" id="link" value="{{$menuSection->link}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Опубликовано</label>
                        <div class="form-check">
                            <input @if($menuSection->active==1) checked @endif class="form-check-input" type="radio" name="active" id="exampleRadios1" value="1">
                            <label class="form-check-label" for="exampleRadios1">
                                Да
                            </label>
                        </div>
                        <div class="form-check">
                            <input  @if($menuSection->active==0) checked @endif class="form-check-input" type="radio" name="active" id="exampleRadios2" value="0">
                            <label class="form-check-label" for="exampleRadios2">
                                Нет
                            </label>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label  for="Number">Порядковый номер</label>
                        <input class="form-control rounded text-muted" id="Number" value="{{$menuSection->order}}" placeholder="Порядковый номер" type="number" name="order">
                    </div>
                    <button type="submit" class="btn-success btn-lg">Cохранить</button>
                    <a href="{{route('menu.index')}}"  class="btn-info btn-lg">Назад</a>
                </form>

            </div>
        </div>
    </div>
    @endforeach
@endsection
