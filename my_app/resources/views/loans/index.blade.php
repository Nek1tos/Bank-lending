<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Кредити</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f4f4; color: #333; }

        nav { background: #009245; padding: 12px 25px; display: flex; justify-content: space-between; align-items: center; }
        nav .logo { color: white; font-size: 20px; font-weight: bold; text-decoration: none; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-size: 14px; }
        nav a:hover { text-decoration: underline; }

        h1 { text-align: center; padding: 25px; color: #009245; }

        .cards { display: flex; gap: 18px; flex-wrap: wrap; justify-content: center; padding: 0 20px 30px; }
        .card { background: white; border-radius: 6px; padding: 22px; width: 290px; border-top: 3px solid #009245; }
        .card h3 { color: #009245; margin-bottom: 12px; font-size: 16px; }
        .card p { font-size: 14px; color: #555; margin: 6px 0; }
        .card a { display: block; background: #009245; color: white; text-align: center;
                  padding: 9px; border-radius: 4px; text-decoration: none; margin-top: 14px; font-size: 14px; }
        .card a:hover { background: #007a38; }

        footer { background: #009245; color: white; text-align: center; padding: 15px; font-size: 13px; margin-top: 20px; }
    </style>
</head>
<body>

<nav>
    <a href="/" class="logo">🟢 УкрБанк</a>
    <div>
        <a href="/">Головна</a>
        <a href="/about">Про проєкт</a>
    </div>
</nav>

<h1>Кредитні програми</h1>

@php $icons = ['🛒', '🏠', '🚗', '💼']; @endphp

<div class="cards">
    @foreach($loans as $i => $loan)
    <div class="card">
        <h3>{{ $icons[$i] }} {{ $loan['name'] }}</h3>
        <p>Ставка: <b>{{ $loan['rate'] }}</b></p>
        <p>Термін: <b>{{ $loan['term'] }}</b></p>
        <p>Сума: <b>{{ $loan['amount'] }}</b></p>
        <a href="/loans/{{ $loan['id'] }}">Детальніше →</a>
    </div>
    @endforeach
</div>

<footer>© 2026 УкрБанк</footer>

</body>
</html>