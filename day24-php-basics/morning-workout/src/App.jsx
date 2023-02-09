import { useEffect, useState } from 'react'
import './App.css'

function App() {
  const [data, setData] = useState(null)

  const fetchData = async () => {
    const response = await fetch("https://catfact.ninja/fact")
    const data = await response.json()
    setData(data)
  }

  useEffect(() => {
    fetchData()
  }, [])

  return (
    <div className="App">
      {
        !data ?
        <p>LOADING</p>
        :
        <p>{data.fact}</p>
      }
    </div>
  )
}

export default App
