<?php

trait message{
    public function greeting() {
        echo "Assalamu alaikum ......from trait<br/>";
    }
}

class newClass {
    use message;

    public function msg_newCls() {
        echo "This is from..........newClass <br/> ";
    }
}

$test = new newClass();

$test->greeting();
$test->msg_newCls();


?>