<?php

class greetings {
    public static function welcome() {
        echo "Welcome to Static method.";
    }

    // pblic function __construct() {
    //     self::welcome();
    // }u

    public function msg() {
        greetings::welcome();
    }
}


// new greetings();

$show=new greetings();
$show->msg();
$show->welcome();

// $newClass = new greetings();
// $newClass->welcome();





?>