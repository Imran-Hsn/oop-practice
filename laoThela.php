<?php

function a() {
    static $j = 0;
    $j++;
    echo $j . "world";
    echo "<br>";
    b();

}



function b() {
    static $i = 0;
    $i++;
    echo $i . "Hello";
    // if($i==100) {
    //     break;
    // }
    a();
}

// $nes = a();
a();




?>