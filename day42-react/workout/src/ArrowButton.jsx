export default function ArrowButton({
    label,
    current,
    callback,
    change
}) {

    const handleClick = () => {
        callback(current + change);
    }

    return (
        <button onClick={ handleClick }>
            { label }
        </button>
    )

}