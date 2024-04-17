import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './App.jsx'
import './index.css'
import { TesztProvider } from './contexts/TesztContext.jsx'

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <TesztProvider>
      <App />
    </TesztProvider>
  </React.StrictMode>,
)
