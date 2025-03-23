<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="{{ route('admin.dashboard') }}" class="navbar-brand">Админ Панель</a>
        <a href="{{ route('admin.users.index') }}" class="navbar-brand">Users</a>
        <a href="{{ route('admin.news.index') }}" class="navbar-brand">News</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Выйти</button>
        </form>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
