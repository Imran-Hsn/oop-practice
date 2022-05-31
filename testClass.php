<?php

class car {
    public $name;
    public $color;

    function set_name($name) {
        $this->name = $name;
    }
    
    function set_color($color) {
        $this->color = $color;
    }

    function get_name() {
        echo $this->name;
        echo "<br>";
    }

    function get_color (){
        echo $this->color;
        echo "<br>";
    }
}


$ford = new car ();
$ford->set_name('Ford');
$ford->get_name();

$ford->set_color('red');
$ford->get_color();

// $bmw = new car();

var_dump($ford instanceof car);


?>