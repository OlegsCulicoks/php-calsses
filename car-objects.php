<?php

require_once 'ICEngine.php';
require_once 'ElectricMotor.php';
require_once 'Tire.php';
require_once 'Car.php';

$tires = [
    new Tire(32, 18),
    new Tire(32, 18),
    new Tire(32, 18),
    new Tire(32, 18),
];

$icEngine = new ICEngine('300hp', 'petrol', 'high', 'V8', 8);
$electricMotor = new ElectricMotor('200kw', 'electric', 'high');

$car1 = new Car('Red', 'BMW', 2020, 20000, $icEngine, $tires);
echo "Car 1 created\n";
var_dump($car1);

$car2 = new Car('Blue', 'Tesla', 2022, 10000, $electricMotor, $tires);
echo "Car 2 created\n";
var_dump($car2);

?>
