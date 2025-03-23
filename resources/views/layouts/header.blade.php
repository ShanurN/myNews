<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('news.indexs') }}">MyNEWS</a>
        @if(Session::has('user'))
            <a href="{{ route('profile') }}" class="btn btn-outline-secondary">{{ Session::get('user') }}</a>
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-danger">Выйти</button>
            </form>
        @else
            <a href="{{ route('login.form') }}" class="btn btn-outline-primary">Войти</a>
            <a href="{{ route('register.form') }}" class="btn btn-outline-success">Регистрация</a>
        @endif
    </div>
</nav>
