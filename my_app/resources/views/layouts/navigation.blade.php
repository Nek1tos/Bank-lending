<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('main') }}">🟢 УкрБанк</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('main') }}">Головна</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('loans.index') }}">Кредити</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Про проєкт</a></li>
                @auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.loans.index') }}">Адмін</a></li>
                @endauth
            </ul>
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Увійти</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Реєстрація</a></li>
                @else
                    <li class="nav-item d-flex align-items-center">
                        <span class="navbar-text text-white me-2">Вітаємо, {{ Auth::user()->name }}</span>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}" class="d-flex">
                            @csrf
                            <button type="submit" class="btn btn-outline-light btn-sm">Вийти</button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
