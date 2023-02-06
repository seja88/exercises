import { useState } from 'react'

export const StateDemo = (props) => {
    const [count, setCount] = useState(0)

    return (
        <div>
            <h1>State Demo</h1>
            <button onClick={() => {
                setCount(count + 1)
            }}>Number of clicks: {count}</button>
        </div>
    )
}