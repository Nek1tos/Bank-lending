import { Link } from 'react-router-dom'

export default function Header({ totalApplied }) {
  return (
    <nav className="navbar">
      <Link to="/" className="logo">
        🟢 УкрБанк
      </Link>
      <div className="nav-right">
        <div className="applications-badge">Заявок: {totalApplied}</div>
        <ul className="nav-links">
          <li>
            <Link to="/catalog" className="nav-link">
              Каталог
            </Link>
          </li>
          <li>
            <Link to="/about" className="nav-link">
              Про нас
            </Link>
          </li>
          <li>
            <Link to="/contacts" className="nav-link">
              Контакти
            </Link>
          </li>
        </ul>
      </div>
    </nav>
  )
}