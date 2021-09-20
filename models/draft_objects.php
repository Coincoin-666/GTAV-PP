<?php

class vehicules
{
    public $typeOfVehicule;

    function __construct($typeOfVehicule)
    {
        $this->typeOfVehicule = $typeOfVehicule;
    }
}

class bikes
{
    // public $brand;
    // public $model;
    // public $color;
    // public $terrain;

    function __construct($brand, $model, $color, $terrain)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->terrain = $terrain;
    }
}
// function set_name($brand) {
//     $this->brand = $brand;
// }

// function get_name($brand) {
//     return $this->brand;
// }

// function set_name($model) {
//     $this->model = $model;
// }

// function get_name($model) {
//     return $this->model;
// }

// function set_name($color) {
//     $this->color = $color;
// }

// function get_name($color) {
//     return $this->color;
// }

// function set_name($terrain) {
//     $this->terrain = $terrain;
// }

// function get_name($terrain) {
//     return $this->terrain;
// }

$bikes = new $vehicules("bikes");




$scorcher = new $bikes("Scorcher");
