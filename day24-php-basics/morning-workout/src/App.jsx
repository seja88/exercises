import { useEffect, useState } from 'react'
import './App.css'

function App() {
  const [data, setData] = useState(null)

  const fetchData = async () => {
    const response = await fetch("http://www.home.test/day25-get-post/morning-workout/index.php")
    const data = await response.json()
    console.log(data.data)
    setData(data.data)
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
        // <p>{data.fact}</p> // assumes that data is one fact object

        // this one assumes the data is array of fact objects
        data.map((catFact) => {
          return <p>{catFact.fact}</p>
        })
      }
    </div>
  )
}

export default App
