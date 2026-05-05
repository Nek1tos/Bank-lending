<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'УкрБанк') }}</title>

        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body { font-family: Arial, sans-serif; background: #f4f4f4; color: #333; }

            nav { background: #009245; padding: 12px 25px; display: flex; justify-content: space-between; align-items: center; }
            nav .logo { color: white; font-size: 20px; font-weight: bold; text-decoration: none; }
            nav > div:nth-child(2) { display: flex; align-items: center; gap: 20px; }
            nav a { color: white; text-decoration: none; margin-left: 20px; font-size: 14px; }
            nav a:hover { text-decoration: underline; }
            nav .auth { display: flex; align-items: center; gap: 12px; }
            nav .auth span { color: white; font-size: 14px; }
            nav .auth a { margin-left: 0; padding: 6px 12px; background: rgba(255,255,255,0.2); border-radius: 4px; }
            nav .auth a:hover { background: rgba(255,255,255,0.3); text-decoration: none; }
            nav .auth button { background: transparent; border: 1px solid white; color: white; padding: 6px 12px; border-radius: 4px; cursor: pointer; font-size: 14px; }
            nav .auth button:hover { background: rgba(255,255,255,0.1); }

            .container { max-width: 520px; margin: 40px auto; }
            .card { background: white; border-radius: 6px; padding: 24px; border-top: 3px solid #009245; box-shadow: 0 5px 18px rgba(0,0,0,.06); }
            .card-title { color: #009245; font-size: 20px; font-weight: 600; margin-bottom: 20px; text-align: center; }

            footer { background: #009245; color: white; text-align: center; padding: 15px; font-size: 13px; margin-top: 40px; }
            footer a { color: #c8f0d8; text-decoration: none; }
        </style>

        <!-- Bootstrap CSS for form components -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EPJ0rK1w8F7D1tJ5FzYI8pMxw3Onk8Kx0ZT2bXXbPUZVjG47w5c4ynQ7Bz3C4K8b" crossorigin="anonymous">
    </head>
    <body>
        <nav>
            <a href="/" class="logo">🟢 УкрБанк</a>
            <div>
                <a href="/loans">Кредити</a>
                <a href="/about">Про проєкт</a>
            </div>
            <div class="auth">
                @auth
                    <span>Вітаємо, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit">Вийти</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Увійти</a>
                    <a href="{{ route('register') }}">Реєстрація</a>
                @endauth
            </div>
        </nav>

        <div class="container">
            <div class="card">
                {{ $slot }}
            </div>
        </div>

        <footer>
            © 2026 УкрБанк | <a href="/about">Про проєкт</a>
        </footer>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQta6qD3JP/0j4m1XKUuxZ0l8/C6+0DEDWgM5zJul/LUKID4+6OiWvuVmMee5xIa" crossorigin="anonymous"></script>
    </body>
</html>
