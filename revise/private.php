<?php
class Check_p {
    private $name;

    public function set_name($name) {
        $this->name = $name;
    }

    public function get_name() {
        echo $this->name;
    }
}

$obj = new Check_p();

$obj->set_name("Marhaba");
// echo $obj->set_name("Idkjdj");
$obj->get_name("");

?>