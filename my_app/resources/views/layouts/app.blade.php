<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'УкрБанк')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EPJ0rK1w8F7D1tJ5FzYI8pMxw3Onk8Kx0ZT2bXXbPUZVjG47w5c4ynQ7Bz3C4K8b" crossorigin="anonymous">
    <style>
        body { padding-top: 70px; background: #f8fafb; }
        .footer { background: #004d25; color: #fff; }
        .navbar-brand { font-weight: 700; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('main') }}">🟢 УкрБанк</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('main') }}">Головна</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('loans.index') }}">Кредити</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Про проєкт</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.loans.index') }}">Адмін</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="container py-4">
    @yield('content')
</main>

<footer class="footer py-3 mt-auto">
    <div class="container text-center small">© 2026 УкрБанк · Навчальний проєкт</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQta6qD3JP/0j4m1XKUuxZ0l8/C6+0DEDWgM5zJul/LUKID4+6OiWvuVmMee5xIa" crossorigin="anonymous"></script>
</body>
</html>
