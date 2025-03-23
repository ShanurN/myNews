@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Добавить новость</h2>
    <form action="{{ route('news.stores') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" class="form-control" placeholder="Название" required>
        <textarea name="description" class="form-control mt-3" placeholder="Описание" required></textarea>
        <input type="file" name="image" class="form-control mt-3">
        <button type="submit" class="btn btn-success mt-3">Сохранить</button>
    </form>
</div>
@endsection
