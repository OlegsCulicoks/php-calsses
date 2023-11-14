<?php

require_once 'PropulsionSystem.php';

class ICEngine extends PropulsionSystem {
    public $size;
    private $cylinderCount;

    public function work() {
        echo "Brumm brumm\n";
    }

    public function __construct($power, $fuelType, $efficiency, $size, $cylinderCount) {
        parent::__construct($power, $fuelType, $efficiency);
        $this->size = $size;
        $this->cylinderCount = $cylinderCount;
    }
}
?>
