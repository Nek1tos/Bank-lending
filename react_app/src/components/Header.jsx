export default function Header({ currentPage, onNavigate, totalApplied }) {
  return (
    <nav className="navbar">
      <button type="button" className="logo" onClick={() => onNavigate('home')}>
        🟢 УкрБанк
      </button>
      <div className="nav-right">
        <div className="applications-badge">Заявок: {totalApplied}</div>
        <ul className="nav-links">
          <li>
            <button type="button" className={currentPage === 'catalog' ? 'active' : ''} onClick={() => onNavigate('catalog')}>
              Каталог
            </button>
          </li>
          <li>
            <button type="button" className={currentPage === 'about' ? 'active' : ''} onClick={() => onNavigate('about')}>
              Про нас
            </button>
          </li>
        </ul>
      </div>
    </nav>
  )
}