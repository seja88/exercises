import { DayForecast } from "../DayForecast/DayForecast"

import { forecast } from "../../forecast"

export const WeekForecast = () => {
    console.log(forecast)
    return (
        <>
            <h1>Weekly Weather Forecast</h1>

            <div className="week-forecast">
                <DayForecast dailyData={forecast[0]}/>
                <DayForecast dailyData={forecast[1]}/>
                <DayForecast dailyData={forecast[2]}/>
                <DayForecast dailyData={forecast[3]}/>
                <DayForecast dailyData={forecast[4]}/>
                <DayForecast dailyData={forecast[5]}/>
                <DayForecast dailyData={forecast[6]}/>
            </div>
        </>
    )
}