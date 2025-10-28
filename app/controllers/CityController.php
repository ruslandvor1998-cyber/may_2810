<?php

namespace app\controllers;
use app\models\CityModel;

class CityController
{
    public function index()
    {
        $citiesArr = new CityModel();
        $currentCities = $citiesArr->all();
        extract($currentCities);
        include_once 'resource/view/template.php';
    }
}