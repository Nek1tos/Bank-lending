export default function Header({ currentPage, onNavigate }) {
  return (
    <nav className="navbar">
      <button type="button" className="logo" onClick={() => onNavigate('home')}>
        🟢 УкрБанк
      </button>
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
    </nav>
  )
}