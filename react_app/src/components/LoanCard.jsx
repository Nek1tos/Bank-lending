import { useState } from 'react';

export default function LoanCard({ name, rate, term, amount, icon }) {
  const [count, setCount] = useState(0);

  return (
    <div className="card">
      <div className="icon">{icon}</div>
      <h3>{name}</h3>
      <p>Ставка: {rate}% річних</p>
      <p>Термін: {term} міс.</p>
      <p>Сума: {amount.toLocaleString('uk-UA')} грн</p>
      <button onClick={() => setCount(count + 1)}>Подати заявку</button>
      {count > 0 && <div className="counter">Заявок подано: {count}</div>}
    </div>
  );
}
