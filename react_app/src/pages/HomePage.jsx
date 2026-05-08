import { Link } from 'react-router-dom'

export default function HomePage() {
  return (
    <main className="main">
      <section className="hero">
        <h1>Кредити для вас</h1>
        <p>Оформте кредит онлайн — швидко і без зайвих документів</p>
        <Link to="/catalog" className="btn">
          Переглянути кредити
        </Link>
      </section>
    </main>
  )
}
