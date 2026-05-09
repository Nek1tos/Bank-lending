import { useState, useEffect } from 'react'
import { Link } from 'react-router-dom'
import api from '../api/axiosConfig'
import LoanCard from '../components/LoanCard'
import PromoBanner from '../components/PromoBanner'
import Spinner from '../components/Spinner'

export default function CatalogPage({ totalApplied, onApply }) {
  const [loans, setLoans] = useState([])
  const [loading, setLoading] = useState(true)
  const [error, setError] = useState(null)
  const [filter, setFilter] = useState('all')

  useEffect(() => {
    setLoading(true)
    api.get('/loans')
      .then(res => {
        setLoans(res.data)
        setError(null)
      })
      .catch(() => setError('Помилка завантаження. Перевірте чи запущений сервер.'))
      .finally(() => setLoading(false))
  }, [])

  // Фільтрація по ставці
  const categories = [
    { key: 'all', label: 'Усі' },
    { key: 'low', label: 'До 12%' },
    { key: 'high', label: 'Від 12%' },
  ]

  const filtered = loans.filter(loan => {
    const rate = parseFloat(loan.rate)
    if (filter === 'low') return rate < 12
    if (filter === 'high') return rate >= 12
    return true
  })

  if (loading) return <Spinner />
  if (error) return <p style={{textAlign:'center', color:'red', padding:'40px'}}>{error}</p>

  return (
    <main className="main">
      <section className="catalog-page">
        <h1>Кредитні програми</h1>
        <div className="applications-summary">Заявок всього: {totalApplied}</div>
        <PromoBanner />

        <div className="filter-buttons">
          {categories.map(cat => (
            <button
              key={cat.key}
              className={filter === cat.key ? 'active' : ''}
              onClick={() => setFilter(cat.key)}
            >
              {cat.label}
            </button>
          ))}
        </div>

        {filtered.length === 0
          ? <p style={{textAlign:'center'}}>Кредитів не знайдено</p>
          : <div className="cards-grid">
              {filtered.map((loan) => (
                <div key={loan.id} className="card-wrapper">
                  <LoanCard
                    name={loan.name}
                    rate={loan.rate}
                    term={loan.term}
                    amount={Number(loan.amount)}
                    icon={loan.icon}
                    onApply={onApply}
                  />
                  <Link to={`/loans/${loan.id}`} className="details-link">
                    Детальніше →
                  </Link>
                </div>
              ))}
            </div>
        }
      </section>
    </main>
  )
}
