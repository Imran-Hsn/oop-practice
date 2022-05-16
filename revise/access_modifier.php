<?php

class Human
{
    public $name;
    public $age;
    public $city;

    public function set_name($n)
    {
        $this->name = $n;
    }

    protected function set_age($n)
    {
        $this->age = $n;
    }

    public function set_city($n)
    {
        $this->city = $n;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_age()
    {
        echo $this->age;
    }
}

$man = new Human();
$man->set_name("Imran");

echo $man->get_name() . " ";
// To access protected function
class imran extends Human
{

    public function set_age($age)
    {
        $this->age = $age;
    }

    public function get_age()
    {
        echo $this->age;
    }
}

$man2 = new imran();
$man2->set_age(25);
$man2->get_age();

// $man->set_age(24);
// $man->set_weight(60);
