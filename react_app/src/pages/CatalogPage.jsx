import { Link } from 'react-router-dom'
import { loans } from '../data/loans'
import LoanCard from '../components/LoanCard'
import PromoBanner from '../components/PromoBanner'

export default function CatalogPage({ totalApplied, onApply }) {
  return (
    <main className="main">
      <section className="catalog-page">
        <h1>Кредитні програми</h1>
        <div className="applications-summary">Заявок всього: {totalApplied}</div>
        <PromoBanner />
        <div className="cards-grid">
          {loans.map((loan) => (
            <div key={loan.id} className="card-wrapper">
              <LoanCard
                name={loan.name}
                rate={loan.rate}
                term={loan.term}
                amount={loan.amount}
                icon={loan.icon}
                onApply={onApply}
              />
              <Link to={`/loans/${loan.id}`} className="details-link">
                Детальніше →
              </Link>
            </div>
          ))}
        </div>
      </section>
    </main>
  )
}
