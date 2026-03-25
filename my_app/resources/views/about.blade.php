<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Про проєкт</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f4f4; color: #333; }

        nav { background: #009245; padding: 12px 25px; display: flex; justify-content: space-between; align-items: center; }
        nav .logo { color: white; font-size: 20px; font-weight: bold; text-decoration: none; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-size: 14px; }
        nav a:hover { text-decoration: underline; }

        .container { max-width: 650px; margin: 30px auto; padding: 0 15px; }
        .block { background: white; border-radius: 6px; padding: 22px; margin-bottom: 16px; border-left: 4px solid #009245; }
        .block h2 { color: #009245; margin-bottom: 10px; font-size: 17px; }
        .block p, .block li { font-size: 14px; color: #555; line-height: 1.6; }
        .block ul { padding-left: 18px; }
        .block a { color: #009245; }

        footer { background: #009245; color: white; text-align: center; padding: 15px; font-size: 13px; margin-top: 10px; }
    </style>
</head>
<body>

<nav>
    <a href="/" class="logo">🟢 УкрБанк</a>
    <div>
        <a href="/">Головна</a>
        <a href="/loans">Кредити</a>
    </div>
</nav>

<div class="container">

    <div class="block">
        <h2>Про проєкт</h2>
        <p>Навчальний проєкт на тему <b>«Видача банком кредитів»</b>. Реалізовано на Laravel 11 з Blade-шаблонами.</p>
    </div>

    <div class="block">
        <h2>Технології</h2>
        <p>PHP 8, Laravel 11, Blade, HTML, CSS, JavaScript</p>
    </div>

    <div class="block">
        <h2>Маршрути</h2>
        <ul>
            <li>GET / — головна сторінка</li>
            <li>GET /loans — список кредитів</li>
            <li>GET /loans/{id} — деталі кредиту</li>
            <li>GET /about — про проєкт</li>
        </ul>
    </div>

    <div class="block">
        <h2>GitHub</h2>
        <p><a href="https://github.com/Nek1tos/Bank-lending" target="_blank">github.com/Nek1tos/Bank-lending</a></p>
    </div>

</div>

<footer>© 2026 УкрБанк | Навчальний проєкт</footer>

</body>
</html>