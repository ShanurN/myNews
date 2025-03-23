@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Админ Панель</h2>

    <h4>Топ 5 новостей</h4>
    <ul>
        @foreach($topNews as $news)
            <li>{{ $news->name }} ({{ $news->created_at }})</li>
        @endforeach
    </ul>

    <h4>Топ авторов</h4>
    <ul>
        @foreach($topAuthors as $author)
            <li>{{ $author->author }} - {{ $author->total_news }} новостей</li>
        @endforeach
    </ul>
</div>
@endsection
