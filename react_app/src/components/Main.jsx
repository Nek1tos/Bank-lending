export default function Main({ page, onNavigate }) {
  return (
    <main className="main">
      {page === 'home' && (
        <>
          <section className="hero">
            <h1>Кредити для вас</h1>
            <p>Оформте кредит онлайн — швидко і без зайвих документів</p>
            <button type="button" className="btn" onClick={() => onNavigate('catalog')}>
              Переглянути кредити
            </button>
          </section>
          <section className="loans">
            <div className="loan-card">
              <h3>Споживчий кредит</h3>
              <p>Ставка 15%, термін 12 міс</p>
            </div>
            <div className="loan-card">
              <h3>Іпотека</h3>
              <p>Ставка 10%, термін 240 міс</p>
            </div>
            <div className="loan-card">
              <h3>Автокредит</h3>
              <p>Ставка 12%, термін 60 міс</p>
            </div>
          </section>
        </>
      )}

      {page === 'catalog' && (
        <section className="catalog-page">
          <h1>Каталог кредитів</h1>
          <div className="loan-card-list">
            <div className="loan-card">
              <h3>Споживчий кредит</h3>
              <p>Ставка 15%, термін 12 міс</p>
            </div>
            <div className="loan-card">
              <h3>Іпотека</h3>
              <p>Ставка 10%, термін 240 міс</p>
            </div>
            <div className="loan-card">
              <h3>Автокредит</h3>
              <p>Ставка 12%, термін 60 міс</p>
            </div>
          </div>
        </section>
      )}

      {page === 'about' && (
        <section className="about-page">
          <h1>Про нас</h1>
          <p>
            УкрБанк — ваш надійний партнер для оформлення кредитів. Ми пропонуємо зручні умови,
            прозорий розрахунок і підтримку клієнтів на кожному етапі.
          </p>
          <p>
            Наші послуги створені для того, щоб ви могли швидко підібрати кредит і
            оформити його з мінімальною кількістю документів.
          </p>
        </section>
      )}
    </main>
  )
}