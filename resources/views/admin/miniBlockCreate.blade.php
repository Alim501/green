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
            <h2>Новый блок</h2>
            <div class="table-responsive">
                <form action="{{route('miniBlock.index')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Опубликовано</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="publicated" id="exampleRadios1" value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Да
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="publicated" id="exampleRadios2" value="0">
                            <label class="form-check-label" for="exampleRadios2">
                                Нет
                            </label>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label  for="Number">Порядковый номер</label>
                        <input class="form-control rounded text-muted" id="Number" placeholder="Порядковый номер" type="number" name="order">
                    </div>
                    <div class="form-group ">
                        <label  for="image">Картинка</label>
                        <input class="form-control rounded text-muted" id="image" placeholder="Порядковый номер" type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label for="summernote1">Заголовок</label>
                        <textarea  name="title" class="form-control" id="summernote1" rows="3">&nbsp;</textarea>
                    </div>
                    <div class="form-group">
                        <label for="summernote">Содержание</label>
                        <textarea  name="content" class="form-control" id="summernote" rows="3">&nbsp;</textarea>
                    </div>

                    <button type="submit" class="btn-success btn-lg">Cоздать</button>
                    <a href="{{route('miniBlock.index')}}"  class="btn-info btn-lg">Назад</a>
                </form>
            </div>
        </div>
    </div>

@endsection

