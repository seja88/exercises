import { useState } from 'react'
import reactLogo from './assets/react.svg'
import './App.scss'
import { MyHeading } from './components/MyHeading/MyHeading'
import { EventsDemo } from './components/EventsDemo/EventsDemo'
import { StateDemo } from './components/StateDemo/StateDemo'



const App = () => {

  console.log("rendering App")
  return (
    <div className="App">
      <h1>Hello all</h1>
      {/* { MyHeading({name: "Ondrej"}) } */}
      {/* <MyHeading name="Maan" />
      <EventsDemo /> */}
      <StateDemo />
    </div>
  )
}

export default App
