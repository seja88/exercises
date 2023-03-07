import './Box.scss';

export default function Box({ top, left }) {

    const boxStyle = {
        position: 'absolute',
        left: left,
        top: top
    }

    return (
        <div className="box" style={ boxStyle }>
            BOX
        </div>
    )

}