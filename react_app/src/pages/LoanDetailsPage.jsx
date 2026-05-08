import { useState } from 'react'
import { useParams, Link } from 'react-router-dom'
import { loans } from '../data/loans'

export default function LoanDetailsPage({ onApply }) {
  const { id } = useParams()
  const [submitted, setSubmitted] = useState(false)
  const loan = loans.find(l => l.id === Number(id))

  const handleSubmit = () => {
    if (onApply) {
      onApply()
    }
    setSubmitted(true)
    window.setTimeout(() => setSubmitted(false), 2000)
  }

  if (!loan) {
    return (
      <main className="main">
        <section style={{ textAlign: 'center', padding: '40px' }}>
          <p>Кредит не знайдено</p>
          <Link to="/catalog" className="back-link">← Назад до каталогу</Link>
        </section>
      </main>
    )
  }

  return (
    <main className="main">
      <section style={{ textAlign: 'center', padding: '40px' }}>
        <div
          style={{
            maxWidth: '500px',
            margin: '0 auto',
            backgroundColor: 'white',
            padding: '30px',
            borderRadius: '8px',
            boxShadow: '0 2px 8px rgba(0,0,0,0.1)',
          }}
        >
          <div style={{ fontSize: '48px', marginBottom: '20px' }}>{loan.icon}</div>
          <h2>{loan.name}</h2>
          <p>
            <strong>Ставка:</strong> {loan.rate}% річних
          </p>
          <p>
            <strong>Термін:</strong> {loan.term} місяців
          </p>
          <p>
            <strong>Сума:</strong> {loan.amount.toLocaleString('uk-UA')} грн
          </p>
          <button className="btn" onClick={handleSubmit} style={{ marginTop: '20px', marginBottom: '16px' }}>
            Подати заявку
          </button>
          {submitted && <div className="success-message">Заявку подано</div>}
          <Link to="/catalog" className="back-link">← Назад до каталогу</Link>
        </div>
      </section>
    </main>
  )
}
