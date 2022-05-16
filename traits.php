<?php
include('errorReport.php');

trait tosa {
    private $name = "Tosa Pagli";
    public function msg() {
        echo "Hi....How are you? My name is: {$this->name} <br/>";
    }
}

trait putu {
    protected $name2 = "Vutu naare";
    public function show() {
        echo "Hello putu, My name is {$this->name2} <br/>";
    }
}

class pesha {
    use tosa, putu;

}

$obj = new pesha();
$obj->msg();
$obj->show();

// $ab = new pesha();