<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>{{ $loan->name }}</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f4f4; color: #333; }

        nav { background: #009245; padding: 12px 25px; display: flex; justify-content: space-between; align-items: center; }
        nav .logo { color: white; font-size: 20px; font-weight: bold; text-decoration: none; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-size: 14px; }
        nav a:hover { text-decoration: underline; }

        .container { max-width: 780px; margin: 25px auto; padding: 0 15px; }
        .back { color: #009245; text-decoration: none; font-size: 14px; display: block; margin-bottom: 15px; }

        .row { display: flex; gap: 18px; flex-wrap: wrap; }

        .info { background: white; border-radius: 6px; padding: 22px; flex: 2; min-width: 260px; border-top: 3px solid #009245; }
        .info h2 { color: #009245; margin-bottom: 14px; }
        table { width: 100%; border-collapse: collapse; }
        td { padding: 9px 5px; border-bottom: 1px solid #eee; font-size: 14px; }
        td:last-child { font-weight: bold; color: #009245; text-align: right; }
        .docs { margin-top: 14px; font-size: 13px; color: #666; }

        .calc { background: #009245; color: white; border-radius: 6px; padding: 22px; flex: 1; min-width: 220px; }
        .calc h2 { margin-bottom: 14px; font-size: 17px; }
        .calc label { font-size: 13px; display: block; margin-bottom: 4px; opacity: 0.9; }
        .calc input { width: 100%; padding: 8px; margin-bottom: 12px; border-radius: 4px;
                      border: none; font-size: 14px; }
        .calc button { background: white; color: #009245; border: none; padding: 10px;
                       width: 100%; border-radius: 4px; font-size: 14px; font-weight: bold; cursor: pointer; }
        .calc button:hover { background: #e8f8ee; }

        #result { margin-top: 12px; background: rgba(0,0,0,0.15); padding: 12px;
                  border-radius: 5px; text-align: center; display: none; }
        #result .pay { font-size: 22px; font-weight: bold; }
        #result .sub { font-size: 12px; opacity: 0.85; margin-top: 4px; }

        footer { background: #009245; color: white; text-align: center; padding: 15px; font-size: 13px; margin-top: 20px; }
    </style>
</head>
<body>

<nav>
    <a href="/" class="logo">🟢 УкрБанк</a>
    <div>
        <a href="/">Головна</a>
        <a href="/loans">Кредити</a>
        <a href="/admin/loans">Адмін</a>
        <a href="/about">Про проєкт</a>
    </div>
</nav>

<div class="container">
    <a href="/loans" class="back">← Назад до кредитів</a>

    <div class="row">
        <div class="info">
            @php
        $rateValue = trim(preg_replace('/[^0-9.,]/u', '', $loan->rate));
        $rateValueNumeric = str_replace(',', '.', $rateValue);
        $rateText = is_numeric($rateValueNumeric)
            ? ((floor((float)$rateValueNumeric) == (float)$rateValueNumeric)
                ? number_format((float)$rateValueNumeric, 0, ',', ' ')
                : number_format((float)$rateValueNumeric, 2, ',', ' ')
              ) . '%'
            : $loan->rate;

        $termValue = trim(preg_replace('/[^0-9]/u', '', $loan->term));
        $termText = is_numeric($termValue) ? $termValue . ' міс' : $loan->term;

        $amountValue = trim(preg_replace('/[^0-9.,]/u', '', $loan->amount));
        $amountText = is_numeric(str_replace(',', '.', $amountValue)) ? number_format((float) str_replace(',', '.', $amountValue), 0, ',', ' ') . ' грн' : $loan->amount;
    @endphp

    <h2>{{ $loan->name }}</h2>
            <table>
                <tr><td>Максимальна сума</td><td>{{ $amountText }}</td></tr>
                <tr><td>Процентна ставка</td><td>{{ $rateText }} річних</td></tr>
                <tr><td>Термін</td><td>{{ $termText }}</td></tr>
                <tr><td>Рішення</td><td>30 хвилин</td></tr>
                <tr><td>Дострокове погашення</td><td>Без штрафів</td></tr>
            </table>
            <p class="docs">📄 Документи: паспорт, ідентифікаційний код, довідка про доходи</p>
        </div>

        <div class="calc">
            <h2>Калькулятор</h2>
            <label>Сума кредиту (грн)</label>
            <input type="number" id="amount" placeholder="Наприклад: 50000">
            <label>Термін (місяців)</label>
            <input type="number" id="months" placeholder="Наприклад: 12">
            <button onclick="calculate()">Розрахувати</button>
            <div id="result">
                <div>Щомісячний платіж:</div>
                <div class="pay" id="monthly"></div>
                <div class="sub" id="total"></div>
            </div>
        </div>
    </div>
</div>

<footer>© 2026 УкрБанк</footer>

<script>
function calculate() {
    var amount = parseFloat(document.getElementById('amount').value);
    var months = parseInt(document.getElementById('months').value);
    var rate = {{ (float) preg_replace('/[^0-9.]/', '', $loan->rate) }} / 100 / 12;

    if (!amount || !months) {
        alert('Заповніть всі поля!');
        return;
    }

    var monthly = amount * rate * Math.pow(1 + rate, months) / (Math.pow(1 + rate, months) - 1);
    var total = monthly * months;

    document.getElementById('monthly').textContent = Math.round(monthly).toLocaleString('uk-UA') + ' грн';
    document.getElementById('total').textContent = 'Загальна сума: ' + Math.round(total).toLocaleString('uk-UA') + ' грн';
    document.getElementById('result').style.display = 'block';
}
</script>

</body>
</html>