<?php 
include('errorReport.php');

final class Ball {
    public $name;

    public function set_name($n) {
        $this->name = $n;
    }

    public function get_name() {
        echo $this->name;
    }
}

// class foot extends Ball {

// }

$footBall = new Ball();

$footBall->set_name('Brazuka');
$footBall->get_name();

?>