<?php
class fruit {
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}

$apple = new fruit();
$apple->set_name('apple');

$banana = new fruit();
$banana->set_name('banana');


echo $apple->get_name();
echo "<br>";
echo $banana->get_name();




?>