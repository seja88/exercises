import { useState } from "react"

export const Extra = () => {

    // the inputs are not kept in two separate states.
    // instead, they are kept in ONE state, which is an object with two properties
    // each one for the respective input
    const [formData, setFormData] = useState({
        first_name: "",
        last_name: ""
    })

    // this doesn't change - only "news" is how it accesses the state values
    const handleSubmit = (e) => {
        e.preventDefault()
        alert(`It would seem your name is ${formData.first_name} ${formData.last_name}`)
    }

    // here is the universal handler for the change in ANY of the inputs in the form
    // needs to be assigned to all the inputs we want to handle by it separately
    // but we only write one universal code
    const handleChange = (e) => {
        e.preventDefault()

        // we've seen this with an array... works with objects, too
        const newFormData = {...formData}

            // educational block, we don't actually NEED any of this

            const eduObject = {edu_first_name: "Bob", edu_last_name: "Bobsson"}
            console.log('---------')
            console.log("eduObject",eduObject)
            console.log(`Access via eduObject.edu_last_name ------------------------- ${eduObject.edu_last_name}`)
            console.log(`Access via eduObject["edu_last_name"] ---------------------- ${eduObject["edu_last_name"]}`)

            // As we can see, we can access a property of an array the same way
            // we access an element of the array using index,
            // if instead of the index, we provide the name of the property as a string.
            // Hmmm, if only there was anything in the event information that would dynamically tell us
            // which of the properties of the state we should work with...

            console.log(`The "name" attribute of the input triggering the change ---- ${e.target.name}`)

            // Oh, that's convenient.

            console.log(`Before the update of the state, the value of input is ------ ${newFormData[e.target.name]}`)
            // It only works AS LONG, AS THE "name" ATTRIBUTE OF THE INPUTS MATCH
            // PROPERTY NAMES OF THE OBJECT IN THE formData STATE
            // end of educational block

        // applying what we learned in the educational block, we change only the property
        // of the state object which matches the name attribute of the input element which
        // registered the change event and triggered this function
        newFormData[e.target.name] = e.target.value

            // edu
            console.log(`After the update of the state, the value of input WILL BE -- ${newFormData[e.target.name]}`)
            console.log("This is the last message from the previous state, if you are seeing this, the old state is dead, long live the new state")
            // end edu

        setFormData(newFormData)
    }

    return (
        <div>
            <form action="/" method="get" onSubmit={handleSubmit}>
                {/* NOTICE, that the "name" attribute exactly matches the name of the property in the state.
                    This is absolutely crutial for the handler to work*/}
                First name: <input type="text" name="first_name" value={formData.first_name} onChange={handleChange}/>
                <br />
                Last name: <input type="text" name="last_name" value={formData.last_name} onChange={handleChange} />
                <br />
                <button type="submit">Say my name!</button>
            </form>
        </div>
    )
}