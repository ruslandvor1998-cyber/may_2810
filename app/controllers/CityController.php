<?php

namespace app\controllers;
use app\models\CityModel;

class CityController
{
    public function index()
    {
        $citiesModel = new CityModel();
        $cities = $citiesModel->all();
        extract($cities);
        include_once 'resource/view/template.php';
    }
}