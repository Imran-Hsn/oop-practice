<?php
include('errorReport.php');

trait Mahim {
    private $name = "Mahim";
    public function msg() {
        echo "Hi....How are you? My name is: {$this->name} <br/>";
    }
}

trait Rifat{
    protected $name2 = "Rifat";
    public function show() {
        echo "Hello putu, My name is {$this->name2} <br/>";
    }
}

class Mesha{
    use Mahim, Rifat;

}

$obj = new Mesha();
$obj->msg();
$obj->show();

// $ab = new Mesha();