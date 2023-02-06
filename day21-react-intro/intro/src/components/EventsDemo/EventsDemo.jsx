export const EventsDemo = () => {
    const handleClick = () => {
        console.log('click')
    }

    return (
        <a href="https://www.google.com" onClick={(e) => {
            e.preventDefault()
            console.log("clack");
        }}>Click</a>
    )
}