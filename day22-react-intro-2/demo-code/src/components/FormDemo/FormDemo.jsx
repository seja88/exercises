import { useState } from "react"

export const FormDemo = () => {

    const [firstName, setFirstName] = useState('Andre')

    const handleSubmit = (e) => {
        e.preventDefault()
        alert(`Your submitted first name is: ${firstName}`)
    }

    const handleChange = (e) => {
        e.preventDefault()
        setFirstName(e.target.value)  // new value
    }

    return (
        <div>
            <form action="/" method="GET" onSubmit={handleSubmit}>
                What is your first name:
                <input type="text"
                    name="first_name"
                    value={firstName}
                    onChange={handleChange}
                />
                {/* What is your first name:
                <select name="first_name" value={firstName} onChange={handleChange}>
                    <option value="Ondrej">Ondrej</option>
                    <option value="Andre">Andre</option>
                    <option value="Andrew">Andrew</option>
                </select> */}
                <button type="submit">Submit</button>
            </form>
        </div>
    )
}