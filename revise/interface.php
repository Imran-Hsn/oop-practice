<?php

interface Students {
    function details($name, $class, $phone);
}

class Info implements Students {
    // public $name;
    // public $class;
    // public $phone;

    public function details($name, $class, $id) {
        $this->name = $name;
        $this->class = $class;
        $this->phone = $id;
    }

    public function get_info() {
        echo "Name: " . $this->name . "<br/> Class: " . $this->class ."<br/> Phone: " . $this->id;
    }
}

$student = new Info();
$student->name = "Tuhin";
$student->class = "Ten";
$student->id = "20310";
$student->get_info();

?>