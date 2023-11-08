<?php
abstract class Animal {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function birthday();

    abstract public function eat();

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

class Cat extends Animal {
    public function __construct($name, $age) {
        parent::__construct($name, $age);
        echo "Puss in Boots<br>";
    }

    public function birthday() {
        $this->age++;
    }

    public function eat() {
        return "I like whiskas<br>";
    }
}

class Dog extends Animal {
    public function birthday() {
        $this->age++;
    }

    public function eat() {
        return "I like bones<br>";
    }
}


$cat = new Cat("Mincis", 5);
echo "Vards: " . $cat->getName() . ", Age: " . $cat->getAge() . "<br>";
echo $cat->eat() . "\n";


$dog = new Dog("Reksis", 3);
echo "Vards: " . $dog->getName() . ", Age: " . $dog->getAge() . "<br>";
echo $dog->eat() . "\n";
?>
