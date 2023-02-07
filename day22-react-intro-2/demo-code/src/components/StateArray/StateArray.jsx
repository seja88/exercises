import { useState } from 'react'

export const StateArray = () => {
    const arrayIHave = [
        {id: 1, value: 1, name: "A"},
        {id: 2, value: 2, name: "B"}
    ]
    // const arrayIWant = [<p>1</p>, <p>2</p>]

    // const createElementFromNumber = (number) => {
    //   return <p>{number}</p>
    // }

    // IGNORE HARD!!!!!!
    // const array2 = []
    // arrayIHave.forEach((number) => {
        //   const elementIWant = <p>{number}</p>
        //   array2.push(elementIWant)
        // })

        // const arrayIWant = arrayIHave.map((number) => {
        //   return <p>{number}</p>
        // })
    const [arrayState, setArrayState] = useState([1,2,3,4,5])

    return (
        <div>
            <button onClick={() => {
            // not mandatory WAY, but mandatory step is CREATEING A NEW ARRAY
            const newArray = [...arrayState]

            // example of how to create a new array
            // const anotherDifferentArray = arrayState.map((element) => {return element})

                // change the NEW array to what you want your new state to look like
                newArray.push(arrayState.length + 1)

            // save the new array as new state
            setArrayState(newArray)
            }}>
            Add number
            </button>
            {
            arrayState.map((number, index)=>{
                return (
                <div key={index}>
                    {number}
                    <button onClick={(e) => {
                    const newArray = [...arrayState]
                        newArray[index] = arrayState[index] +1
                    setArrayState(newArray);
                    }}>+1</button>
                </div>
                )
            })
            }

            {/* {arrayIHave.map((data, index) => {
            // return <ImaginaryComponent inputNumber={number} />
            return (
                <div key={index}>
                <p>
                    <span>{data.value}</span>
                </p>
                </div>
            )
            })} */}
        </div>
    )
}