import { useState } from 'react'
import Header from './components/Header'
import Main from './components/Main'
import Footer from './components/Footer'

export default function App() {
  const [page, setPage] = useState('home')

  return (
    <>
      <Header currentPage={page} onNavigate={setPage} />
      <Main page={page} onNavigate={setPage} />
      <Footer />
    </>
  )
}