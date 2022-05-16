<?php

class User
{
    public string $username;
    // public string $password;

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getName()
    {
        echo $this->username;
    }
}

$user = new User();
$user->setUsername("Tuhin");
$user->getName();


?>