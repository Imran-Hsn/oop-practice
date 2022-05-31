<?php

// class habu {
//     public static $name = "Habu Mia";
// }
// echo habu::$name;


// class pi {
//     public static $value=3.14159;
//     public function sValue() {
//         return self::$value;
//     }
// }

// $pi = new pi();
// echo $pi->sValue();

class pi {
    public static $value = 3.14150;
}

class x extends pi {
    public function xval() {
        return parent::$value;
    }
}

echo X::$value;
echo "<br>";

$naare = new x();
echo $naare->xval();
?>