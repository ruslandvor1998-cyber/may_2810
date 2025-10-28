<?php

namespace app\controllers;
use CityModel;

class CityController
{
    public function index()
    {
        $citiesArr = new CityModel();
        $currentCities = $citiesArr->all();
        extract($currentCities);
        include_once 'resorce/views/template.php';
    }
}