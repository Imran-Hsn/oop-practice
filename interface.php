<?php
include('errorReport.php');

interface Animal {
    public function makeSound();
}

class Cat implements Animal {
    public function makeSound() {
        echo "Meow";
    }
}

class Dog implements Animal {
    public function makeSound() {
        echo "Bark";
    }
}

class Mouse implements Animal {
    public function makeSound() {
        echo "Squeak";
    }
}



$bilai = new Cat();
$kutta = new Dog();
$indur = new Mouse();

$animals = array($bilai, $kutta, $indur);

foreach($animals as $joglu) {
    $joglu->makeSound();
    echo "<br>";
}










// $prani->makeSound();
// $kutta->makeSound();
// $indur->makesound();









?>