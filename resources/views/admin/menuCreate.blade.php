@extends('layouts.adminApp')

@section('content')
    <nav>
        <div>
            <h6>''</h6>
        </div>
    </nav>
    @foreach($errors->all() as $error)
        <div class="text-danger h4 font-weight-bolder">{{ $error }}</div>
    @endforeach
    <div class="container">
        <div class="row">
            <h2>Новый ссылка</h2>
            <div class="table-responsive">
                <form action="{{route('menu.index')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Название</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="link">Cсылка</label>
                        <input  name="link" class="form-control" id="link" >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Опубликовано</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="active" id="exampleRadios1" value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Да
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="active" id="exampleRadios2" value="0">
                            <label class="form-check-label" for="exampleRadios2">
                                Нет
                            </label>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label  for="Number">Порядковый номер</label>
                        <input class="form-control rounded text-muted" id="Number"  placeholder="Порядковый номер" type="number" name="order">
                    </div>
                    <button type="submit" class="btn-success btn-lg">Cоздать</button>
                    <a href="{{route('menu.index')}}"  class="btn-info btn-lg">Назад</a>
                </form>
            </div>
        </div>
    </div>

@endsection
