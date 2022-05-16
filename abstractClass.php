<?php
abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro() : string;
}

class Audi extends Car {
    public function intro() : string {
        return "Choose German quality! I'm an <strong>{$this->name}</strong><br>";
    }  
}

class Volvo extends Car {
    public function intro() : string {
        return "Choose Japani! I'm an {$this->name}";
    }
}

class Mercedes extends Car {
    public function intro() : string {
        echo "I'm Mercedes";
    }
}

$audi = new Audi("Audi");
echo $audi->intro();

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$mer = new Mercedes("Mercedes");
$mer->intro();








?>