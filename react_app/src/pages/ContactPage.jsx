import { useState } from 'react'

export default function ContactPage() {
  const [name, setName] = useState('')
  const [email, setEmail] = useState('')
  const [message, setMessage] = useState('')
  const [errors, setErrors] = useState({})
  const [submitted, setSubmitted] = useState(false)

  function handleSubmit(e) {
    e.preventDefault()
    const newErrors = {}

    if (!name.trim())
      newErrors.name = "Ім'я не може бути порожнім"
    if (!email.includes('@'))
      newErrors.email = 'Email має містити символ @'
    if (message.length < 10)
      newErrors.message = 'Повідомлення має бути не менше 10 символів'

    if (Object.keys(newErrors).length > 0) {
      setErrors(newErrors)
      return
    }

    setErrors({})
    setSubmitted(true)
  }

  if (submitted) {
    return (
      <div className="contact-success">
        <h2>✅ Дякуємо, {name}!</h2>
        <p>Ваше повідомлення отримано. Ми зв'яжемось на {email}.</p>
      </div>
    )
  }

  return (
    <div className="contact-page">
      <h2>Зворотній зв'язок</h2>
      <form onSubmit={handleSubmit} className="contact-form">

        <label>Ім'я</label>
        <input
          type="text"
          value={name}
          onChange={e => setName(e.target.value)}
          placeholder="Введіть ваше ім'я"
        />
        {errors.name && <span className="error">{errors.name}</span>}

        <label>Email</label>
        <input
          type="text"
          value={email}
          onChange={e => setEmail(e.target.value)}
          placeholder="example@email.com"
        />
        {errors.email && <span className="error">{errors.email}</span>}

        <label>Повідомлення</label>
        <textarea
          value={message}
          onChange={e => setMessage(e.target.value)}
          placeholder="Мінімум 10 символів..."
          rows={5}
        />
        {errors.message && <span className="error">{errors.message}</span>}

        <button type="submit">Надіслати</button>
      </form>
    </div>
  )
}
