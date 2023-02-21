<?php

class Country
{
    public $id = null;
    public $code = null;
    public $code_alpha2 = null;
    public $name = null;
    public $continent = null;
    public $continent_id = null;
    public $region = null;
    public $surface_area = null;
    public $population = null;
    public $gnp = null;
    public $head_of_state = null;
    public $capital_city_id = null;

    // extra bit to fix the dynamic properties assignment
    // deprecation warning that is thrown since PHP 8.2
    protected $storage_for_new_values = [];

    public function __get($property_name)
    {
        // extra bit to fix the dynamic properties assignment
        // deprecation warning that is thrown since PHP 8.2
        if (array_key_exists($property_name, $this->storage_for_new_values)) {
            return $this->storage_for_new_values[$property_name];
        }

        if ($property_name === 'cities') {

            $cities = City::getCitiesForCountry($this->id);

            $this->cities = $cities;

            return $this->storage_for_new_values[$property_name];
        }
    }

    // extra bit to fix the dynamic properties assignment
    // deprecation warning that is thrown since PHP 8.2
    public function __set($property_name, $value)
    {
        $this->storage_for_new_values[$property_name] = $value;
    }

}