import { useState, useEffect } from 'react'

export default function PromoBanner() {
  const [seconds, setSeconds] = useState(120)

  useEffect(() => {
    if (seconds <= 0) {
      return undefined
    }

    const interval = setInterval(() => {
      setSeconds((prev) => Math.max(prev - 1, 0))
    }, 1000)

    return () => clearInterval(interval)
  }, [seconds])

  const minutes = String(Math.floor(seconds / 60)).padStart(2, '0')
  const currentSeconds = String(seconds % 60).padStart(2, '0')

  return (
    <div className="promo-banner">
      {seconds > 0 ? (
        <p>
          🔥 Спеціальна пропозиція! Подай заявку зараз — діє ще: <strong>{minutes}:{currentSeconds}</strong>
        </p>
      ) : (
        <p>🔥 Пропозиція завершена</p>
      )}
    </div>
  )
}
