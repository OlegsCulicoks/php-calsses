<?php
class Dog {
    public $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function birthday() {
        $this->age++;
    }

    public static function woof() {
        echo "woof!\n";
    }

    public function getAge() {
        return $this->age;
    }
}


$myDog = new Dog("Reksis", 6);


echo $myDog->name . "\n";


echo "Vecums: " . $myDog->getAge() . " gadi\n";


$myDog->birthday();
echo "Jaunais vecums: " . $myDog->getAge() . " gadi\n";


Dog::woof();
?>
