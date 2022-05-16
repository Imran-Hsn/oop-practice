<?php

class Car {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct() {
        echo $this->name ." ". $this->color;
    }

}

$obj = new Car("BMW", "Black");
echo "<br/>";
$obj2 = new Car("Volvo", "white");

// echo $obj->name ." ". $obj->color;










?>