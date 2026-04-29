<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Адмінка УкрБанк')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f4f4; color: #333; }

        nav { background: #009245; padding: 12px 25px; display: flex; justify-content: space-between; align-items: center; }
        nav .logo { color: white; font-size: 20px; font-weight: bold; text-decoration: none; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-size: 14px; }
        nav a:hover { text-decoration: underline; }
        nav .auth { display: flex; align-items: center; gap: 12px; }
        nav .auth span { color: white; font-size: 14px; }
        nav .auth button { background: transparent; border: 1px solid white; color: white; padding: 6px 12px; border-radius: 4px; cursor: pointer; font-size: 14px; }

        .hero { background: white; padding: 40px 25px; text-align: center; border-bottom: 3px solid #009245; }
        .hero h1 { font-size: 28px; color: #009245; margin-bottom: 10px; }
        .hero p { color: #666; margin-bottom: 20px; }
        .hero .hero-buttons { display: flex; justify-content: center; gap: 14px; flex-wrap: wrap; }
        .hero .hero-buttons a { background: #009245; color: white; padding: 10px 28px; border-radius: 4px; text-decoration: none; font-size: 15px; }
        .hero .hero-buttons a:hover { background: #007a38; }

        .content { padding: 30px 20px; }
        .cards { display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; }
        .card { background: white; border-radius: 6px; padding: 20px; width: 290px; text-align: center; border-top: 3px solid #009245; box-shadow: 0 5px 18px rgba(0,0,0,.06); }
        .card .icon { font-size: 32px; margin-bottom: 8px; }
        .card h3 { color: #009245; font-size: 18px; margin-bottom: 8px; }
        .card p { font-size: 14px; color: #666; margin-bottom: 12px; }
        .card a, .card button { display: inline-block; background: #009245; color: white; padding: 10px 18px; border-radius: 4px; text-decoration: none; font-size: 14px; border: none; cursor: pointer; }
        .card a:hover, .card button:hover { background: #007a38; }
        .card .secondary { background: #555; }
        .card .secondary:hover { background: #333; }
        .button-row { display: flex; gap: 10px; flex-wrap: wrap; justify-content: center; margin-top: 14px; }
        .form-card { max-width: 520px; margin: 0 auto; background: white; border-radius: 6px; padding: 24px; border-top: 3px solid #009245; box-shadow: 0 5px 18px rgba(0,0,0,.06); }
        .form-card label { display: block; margin-bottom: 6px; font-weight: 600; color: #333; }
        .form-card input { width: 100%; padding: 10px 12px; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 16px; }
        .form-card .form-actions { display: flex; gap: 10px; flex-wrap: wrap; justify-content: center; }
        footer { background: #009245; color: white; text-align: center; padding: 15px; font-size: 13px; margin-top: 20px; }
        footer a { color: #c8f0d8; text-decoration: none; }
    </style>
</head>
<body>
<nav>
    <a href="/" class="logo">🟢 УкрБанк</a>
    <div>
        <a href="/">Головна</a>
        <a href="/loans">Кредити</a>
        @auth
            <a href="{{ route('admin.loans.index') }}">Адмін</a>
        @endauth
        <a href="/about">Про проєкт</a>
    </div>
    <div class="auth">
        @auth
            <span>Вітаємо, {{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Вийти</button>
            </form>
        @else
            <a href="{{ route('login') }}">Увійти</a>
        @endauth
    </div>
</nav>

<div class="hero">
    <h1>@yield('page_title', 'Адмін панель')</h1>
    <p>@yield('page_description', 'Управління кредитними програмами УкрБанку.')</p>
    <div class="hero-buttons">
        @yield('hero_buttons')
    </div>
</div>

<div class="content">
    @yield('content')
</div>

<footer>
    © 2026 УкрБанк | <a href="/about">Про проєкт</a>
</footer>
</body>
</html>