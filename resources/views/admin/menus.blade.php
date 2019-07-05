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
    <div class="container">
        <div class="row justify-content-between">
                        <h2>Меню</h2>
            <a href="{{route('menu.create')}}" role="button" class="btn-success btn   h3 mr-2">Добавить ссылку</a>
                        <div class="table-responsive">
                <table class="table table-hover table-striped table-sm">
                    <thead>
                    <tr>
                        <th >ID</th>
                        <th >Имя</th>
                        <th>Ccылка</th>
                        <th>Опубликовано</th>
                        <th>Порядок</th>

                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($menu as $menuSection)
                        <tr>
                            <th class="rounded text-muted">{{$menuSection->id}}</th>
                            <td class="rounded text-muted">{{$menuSection->name}}</td>
                            <td class="rounded text-muted">{{$menuSection->link}}</td>
                            <td class="rounded text-muted">{{$menuSection->active}}</td>
                            <td class="rounded text-muted">{{$menuSection->order}}</td>
                            <td class="row justify-content-end">
                                <a href="{{route("menu.show",$menuSection->id)}}" class="mr-2 text-info card-link">Редактировать</a>
                                <form action="{{ route('menu.destroy', $menuSection->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @method("DELETE")
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm ml-2">Удалить</button>
                                </form> </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
