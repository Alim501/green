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
            <h2>Блоки</h2>
            <a href="{{route('miniBlock.create')}}" role="button" class="btn-success btn   h3 mr-2">Создать новый</a>
            <div class="table-responsive">
                <table class="table table-hover table-striped table-sm">
                    <thead>
                    <tr>
                        <th >ID</th>
                        <th >Имя</th>
                        <th >Опубликован</th>
                        <th >Порядок </th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($miniBlocks as $miniBlock)
                        <tr>
                            <th class="rounded text-muted">{{$miniBlock->id}}</th>
                            <td class="rounded text-muted">{{$miniBlock->name}}</td>
                            @if($miniBlock->publicated == 0 )
                                <td class="rounded text-muted">Нет</td>
                            @else
                                <td class="rounded text-muted">Да</td>
                            @endif
                            <td class="rounded text-muted">{{$miniBlock->order}}</td>
                            <td class="row justify-content-end">
                                <a href="{{route("miniBlock.show",$miniBlock->id)}}" class="mr-2 text-info card-link">Редактировать</a>
                                <form action="{{ route('miniBlock.destroy', $miniBlock->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @method("DELETE")
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm ml-2">Удалить</button>
                                </form>
                            <td></td>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
