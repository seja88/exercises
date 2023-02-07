import { useState, useEffect } from 'react'

export const FetchDemo = () => {

    const [data, setData] = useState(null)
    const [noClicks, setNoClicks] = useState(0)

    const fetchData = async () => {
        const response = await fetch("https://uselessfacts.jsph.pl/random.json?language=en")
        const fetchedData = await response.json()
        console.log(fetchedData)
        setData(fetchedData)
    }

    // exactly how and why??
    useEffect(() => {
        fetchData()
    },[])

    // advanced - the fetch happens at the very start AND when noClicks
    //    state changes
    // useEffect(() => {
    //     fetchData()
    // },[noClicks])

    return (
        <div>
            {
                !data ?
                <p>LOADING</p>
                :
                <>
                    <p>YAY! WE HAVE DATA!!</p>
                    <p>{data.text}</p>
                    <p>source: {data.source}</p>
                    <button onClick={() => {
                        setNoClicks(noClicks + 1)
                    }}>{noClicks}</button>
                </>
            }
        </div>
    )
}