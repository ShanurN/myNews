@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Личный кабинет</h1>
    <p>Добро пожаловать, {{ Auth::user()->login }}</p>
    <ul>
        <li><a href="{{ route('password.change') }}">Изменить пароль</a></li>
        <li><a href="{{ route('news.create') }}">Добавить новость</a></li>
        <li><a href="{{ route('logout') }}">Выйти</a></li>
    </ul>
</div>
@endsection