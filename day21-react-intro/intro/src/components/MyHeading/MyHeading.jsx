import './MyHeading.scss'

export const MyHeading = (props) => {
    return (
        <>
            <h1 id='my-heading'>Hello {props.name}</h1>
            <h2>Hello World!</h2>
        </>
    )
}