<?php

class City
{
    public $id = null;
    public $name = null;
    public $country_id = null;
    public $district = null;
    public $population = null;

    public static function getCitiesForCountry($country_id)
    {
        $query = "
            SELECT *
            FROM `cities`
            WHERE `country_id` = ?
        ";

        $cities = DB::select($query, [$country_id], static::class);

        return $cities;
    }
}