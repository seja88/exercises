import { useState } from 'react'
import './App.css'
import Box from './Box'
import ArrowButton from './ArrowButton';

function App() {

  const [boxTop, setBoxTop] = useState(0);
  const [boxLeft, setBoxLeft] = useState(0);

  return (
    <div className="App">
      <Box
        top={ boxTop }
        left={ boxLeft }
      />

      <div className="buttons">

        <ArrowButton
          label="↑"
          current={ boxTop }
          callback={ setBoxTop }
          change={ -50 }
        />

        <ArrowButton
          label="↓"
          current={ boxTop }
          callback={ setBoxTop }
          change={ 50 }
        />

        <button
          onClick={ () => { setBoxLeft(boxLeft - 50) } }
        >
          LEFT
        </button>

        <button
          onClick={ () => { setBoxLeft(boxLeft + 50) } }
        >
          RIGHT
        </button>

      </div>
    </div>
  )
}

export default App
