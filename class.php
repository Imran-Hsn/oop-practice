<?php

class car {
    public $name;
    public $color;
    public $cc;

    function together ($name, $color, $cc) {
        $this->name = $name;
        $this->color = $color;
        $this->cc = $cc;

        return ("Name: " . $this->name . " " . "Color: " . $this->color . " " . "CC: " . $this->cc);
    }
}

$ford = new car();
$ford->together("BMW", "Black", 2200);
echo "Name: " . $ford->name ." ". "Color: " . $ford->color ." ". "CC: " . $ford->cc;

// $ford->together("Ford", "White", 1500);
// echo "Name: " . $ford->name ." ". "Color: " . $ford->color ." ". "CC: " . $ford->cc;

// echo $ford->together("BMW", "Black", 2200);
echo "<br>";




?>