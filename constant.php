<?php
include('errorReport.php');

class Goodbye {
    const LEAVING_MESSAGE = "<h2>@Thank you for visiting us</h2>"; 

    public function byebye() {
        echo self::LEAVING_MESSAGE;
    }
}

// echo Goodbye::LEAVING_MESSAGE;

$bye = new Goodbye();
$bye->byebye();




?>