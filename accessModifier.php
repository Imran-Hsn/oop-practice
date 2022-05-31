<?php
include('errorReport.php');

class Human {
    private $name;

    public function __construct($a) {
        $this->name = $a;
    }

    public function show() {
        return "Name is: " . $this->name;
    }
}


class Man extends Human {
    
    public function get() {
        echo "Your name: " . $this->name . "<br>";
    }
}

// $second = new Human("John");
// $second->show();

$third = new Man('shire');
echo $third->show();


// $third->name = "goru";
// $third->get();


?>