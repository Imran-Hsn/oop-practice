<?php
class car {
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct()
    {
        echo $this->name ." ". $this->color;   
    }
    
}

$toyota = new car("Fiat", "blue");
$toyota->__construct("BMW","Red");

?>