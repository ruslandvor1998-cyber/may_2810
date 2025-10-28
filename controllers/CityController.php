<?php

class CityController
{
    public function index()
    {
        $citiesArr = new CityModel();
        $currentCities = $citiesArr->all();
        extract($currentCities);
        include_once 'resource/views/template.php';
    }
}