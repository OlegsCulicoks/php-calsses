<?php

require_once 'PropulsionSystem.php';
require_once 'ICEngine.php';
require_once 'ElectricMotor.php';
require_once 'Tire.php';

class Car {
    public $color;
    public $brand;
    private $releaseYear;
    private $mileage;
    private $propulsionSystem;
    private $tires = [];

    public function __construct($color, $brand, $releaseYear, $mileage, PropulsionSystem $propulsionSystem, array $tires) {
        $this->color = $color;
        $this->brand = $brand;
        $this->releaseYear = $releaseYear;
        $this->mileage = $mileage;
        $this->propulsionSystem = $propulsionSystem;
        $this->tires = $tires;
    }

    public function move() {
        
    }

    public function makeNoise() {
        
    }
}
?>
