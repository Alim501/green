@extends('layouts.adminApp')

@section('content')
<div class="container">
    <nav>
        <div>
            <h6>'</h6>
        </div>
    </nav>
    @if (session('message'))
        <div class="alert alert-info">{{ session('message') }}</div>
    @endif

    <div class="row justify-content-between">
        <h2>Страницы</h2>

        <a href="{{route('page.create')}}" role="button" class="btn-success btn   h3 mr-2">Создать новую</a>
        <div class="table-responsive ">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th >ID</th>
                    <th >Имя</th>
                    <th >Опубликовано</th>
                    <th >Линк </th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
            <tbody>
        @foreach($pages as $page)
            <tr>
                <th class="rounded text-muted">{{$page->id}}</th>
                <td class="rounded text-muted">{{$page->name}}</td>
                @if($page->publicated == 0 )
                    <td class="rounded text-muted">Нет</td>
                @else
                    <td class="rounded text-muted">Да</td>
                @endif
                <td class="rounded text-muted">{{$page->slug}}</td>
                <td class="row justify-content-end">
                    <a href="{{route("page.show",$page->id)}}" class="mr-2 text-info card-link">Редактировать</a>

                    <form action="{{ route('page.destroy', $page->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @method("DELETE")
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm ml-2" @if($page->main==1) disabled @endif>Удалить</button>
                    </form>

                </td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
        </div>
    </div>
</div>
@endsection
