import { useState, useEffect } from 'react'
import { BrowserRouter, Routes, Route } from 'react-router-dom'
import Header from './components/Header'
import Footer from './components/Footer'
import Spinner from './components/Spinner'
import HomePage from './pages/HomePage'
import CatalogPage from './pages/CatalogPage'
import LoanDetailsPage from './pages/LoanDetailsPage'
import AboutPage from './pages/AboutPage'

export default function App() {
  const [isLoading, setIsLoading] = useState(true)
  const [totalApplied, setTotalApplied] = useState(() => {
    const saved = localStorage.getItem('totalApplied')
    if (saved !== null) {
      const value = Number(saved)
      return Number.isNaN(value) ? 0 : value
    }
    return 0
  })

  useEffect(() => {
    const timer = setTimeout(() => {
      setIsLoading(false)
    }, 2000)

    return () => clearTimeout(timer)
  }, [])

  useEffect(() => {
    localStorage.setItem('totalApplied', totalApplied)
  }, [totalApplied])

  if (isLoading) {
    return <Spinner />
  }

  return (
    <BrowserRouter>
      <Header totalApplied={totalApplied} />
      <Routes>
        <Route path="/" element={<HomePage />} />
        <Route
          path="/catalog"
          element={<CatalogPage totalApplied={totalApplied} onApply={() => setTotalApplied((prev) => prev + 1)} />}
        />
        <Route path="/loans/:id" element={<LoanDetailsPage onApply={() => setTotalApplied((prev) => prev + 1)} />} />
        <Route path="/about" element={<AboutPage />} />
        <Route
          path="*"
          element={
            <p style={{ textAlign: 'center', padding: '40px' }}>
              404 — Сторінку не знайдено
            </p>
          }
        />
      </Routes>
      <Footer />
    </BrowserRouter>
  )
}