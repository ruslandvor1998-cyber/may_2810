<?php

namespace app\models;

class CityModel {
    protected $file;
    
    public function __construct($file = null)
    {
        if ($file) {
            $this->file = $file;
        } else {
            $this->file = __DIR__ . '/../../store/cities.json';
        }
    }
    
    public function all() : array
    {
        if (!file_exists($this->file)) {
            return [];
        }

        $json = file_get_contents($this->file);
        $data = json_decode($json, true);
        
        if (json_last_error() !== JSON_ERROR_NONE || !is_array($data)) {
            return [];
        }
        
        return $data[getCurrentLocale()];
    }
}