@extends('layouts.admin')
@section('content')
<div class="container">
    <h1>News</h1>
    <a class="btn btn-success btn-sm" href="{{ route('admin.news.create') }}">Add News</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($news as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->author }}</td>
                <td>
                    <a href="{{ route('admin.news.edit', $item) }}" class="btn btn-primary btn-sm">Редактировать</a>
                    @if(Session::get('user'))
                        <form action="{{ route('admin.news.destroy', $item) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection