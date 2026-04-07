<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f4f4; color: #333; }

        nav { background: #009245; padding: 12px 25px; display: flex; justify-content: space-between; align-items: center; }
        nav .logo { color: white; font-size: 20px; font-weight: bold; text-decoration: none; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-size: 14px; }
        nav a:hover { text-decoration: underline; }

        .hero { background: white; padding: 40px 25px; text-align: center; border-bottom: 3px solid #009245; }
        .hero h1 { font-size: 28px; color: #009245; margin-bottom: 10px; }
        .hero p { color: #666; margin-bottom: 20px; }
        .hero a { background: #009245; color: white; padding: 10px 28px; border-radius: 4px; text-decoration: none; font-size: 15px; }
        .hero a:hover { background: #007a38; }

        .cards { display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; padding: 30px 20px; }
        .card { background: white; border-radius: 6px; padding: 20px; width: 190px; text-align: center; border-top: 3px solid #009245; }
        .card .icon { font-size: 32px; margin-bottom: 8px; }
        .card h3 { color: #009245; font-size: 15px; margin-bottom: 6px; }
        .card p { font-size: 13px; color: #666; }

        footer { background: #009245; color: white; text-align: center; padding: 15px; font-size: 13px; }
        footer a { color: #c8f0d8; }
    </style>
</head>
<body>

<nav>
    <a href="/" class="logo">🟢 УкрБанк</a>
    <div>
        <a href="/loans">Кредити</a>
        <a href="/admin/loans">Адмін</a>
        <a href="/about">Про проєкт</a>
    </div>
</nav>

<div class="hero">
    <h1>Кредити для вас</h1>
    <p>Оформте кредит онлайн — швидко і без зайвих документів</p>
    <div class="hero-buttons">
        <a href="/loans">Обрати кредит</a>
        <a href="/admin/loans">Адмін</a>
    </div>
</div>

<div class="cards">
    <div class="card"><div class="icon">🛒</div><h3>Споживчий</h3><p>від 15% · до 12 міс.</p></div>
    <div class="card"><div class="icon">🏠</div><h3>Іпотека</h3><p>від 10% · до 20 років</p></div>
    <div class="card"><div class="icon">🚗</div><h3>Автокредит</h3><p>від 12% · до 5 років</p></div>
    <div class="card"><div class="icon">💼</div><h3>Бізнес</h3><p>від 18% · до 3 років</p></div>
</div>

<footer>
    © 2026 УкрБанк | <a href="/about">Про проєкт</a>
</footer>

</body>
</html>