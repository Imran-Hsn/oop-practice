<?php
include('errorReport.php');

class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro() {
        echo "The fruit is {$this->name} and color is {$this->color}.";
    }
}

class grape extends Fruit {
    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight =$weight;
    }

    // public function message() {
    //     echo "am i a fruit or a grape";
    //     echo "<br>";

    //     $this->intro();
    // }

    public function intro() {
        echo "The fruit is {$this->name}, the color is {$this->color} and weight is {$this->weight} gm";
    }
}

$grape = new grape("Grape", "Green", "300");
// $grape->message();
echo "<br>";
$grape->intro();





// $pine = new Fruit("PineApple", "Yellow");

// $pine->intro();


?>