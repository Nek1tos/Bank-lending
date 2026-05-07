import { useState, useEffect } from 'react'
import Header from './components/Header'
import Main from './components/Main'
import Footer from './components/Footer'
import Spinner from './components/Spinner'

export default function App() {
  const [page, setPage] = useState(() => localStorage.getItem('page') || 'home')
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

  useEffect(() => {
    localStorage.setItem('page', page)
  }, [page])

  if (isLoading) {
    return <Spinner />
  }

  return (
    <>
      <Header currentPage={page} onNavigate={setPage} totalApplied={totalApplied} />
      <Main page={page} onNavigate={setPage} totalApplied={totalApplied} onApply={() => setTotalApplied((prev) => prev + 1)} />
      <Footer />
    </>
  )
}