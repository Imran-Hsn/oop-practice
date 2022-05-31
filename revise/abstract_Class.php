<?php

abstract class classA {
    // public $name;
    abstract protected function calc($a, $b);
}

class classB extends classA {
    public function calc($a, $b) {
        echo $a + $b;

    }
}

$test = new classB();
$test->calc(33,33);

?>