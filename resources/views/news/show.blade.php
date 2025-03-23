@extends('layouts.app')

@section('content')
    <div class="card">
        <img src="../storage/{{ $news->image }}" class="card-img-top" alt="{{ $news->name }}">
        <div class="card-body">
            <h2 class="card-title">{{ $news->name }}</h2>
            <p><strong>Автор:</strong> {{ $news->author }}</p>
            <p class="card-text">{{ $news->description }}</p>
            <a href="{{ route('news.indexs') }}" class="btn btn-secondary">Назад</a>
        </div>
    </div>
@endsection
