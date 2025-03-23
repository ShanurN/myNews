@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Личный кабинет</h2>
    <p>Логин: {{ Session::get('user') }}</p>
    <a href="{{ route('news.creates') }}" class="btn btn-primary">Добавить новость</a>
</div>
@endsection
