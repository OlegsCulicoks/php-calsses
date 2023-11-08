<?php
class Cat {
    public $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function birthday() {
        $this->age++;
    }

    public static function meow() {
        echo "meow!\n";
    }

    public function getAge() {
        return $this->age;
    }
}


$mincis = new Cat("Mincis", 0);
$brincis = new Cat("Brincis", 1);


$mincis->birthday();
echo "Mincis vecums: " . $mincis->getAge() . "\n"; 

$brincis->birthday();
echo "Brincis vecums: " . $brincis->getAge() . "\n"; 

Cat::meow(); 
?>
