<?php

abstract class PropulsionSystem {
    public $power;
    public $fuelType;
    protected $efficiency;

    abstract public function work();

    public function __construct($power, $fuelType, $efficiency) {
        $this->power = $power;
        $this->fuelType = $fuelType;
        $this->efficiency = $efficiency;
    }
}
?>
