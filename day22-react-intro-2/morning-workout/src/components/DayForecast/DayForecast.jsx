export const DayForecast = (props) => {
    console.log(props)
    return (
        <div className="day-forecast">
            <div className="day-forecast__header">{props.dailyData.weekday}</div>
            <div className="day-forecast__body">
                <div className={`day-forecast__image weather-${props.dailyData.weather}`}></div>
                <div className="day-forecast__temps">
                <span className="temp-day">{props.dailyData.tempDay}°</span>
                <span className="temp-night">{props.dailyData.tempNight}°</span>
                </div>
            </div>
        </div>
    )
}