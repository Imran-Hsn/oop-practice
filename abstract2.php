<?php
include('errorReport.php');
abstract class parentClass {
    abstract protected function prefixName($name);
}

class childClass extends ParentClass {
    public function prefixName($name) {
        if($name == 'John Doe') {
            $prefix = "Mr.";
        }
        elseif($name == 'Jane Doe') {
            $prefix = "Mrs.";
        }
        else {
            $prefix = "";
        }
        return "{$prefix} {$name}";
    }
}

$class = new childClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");

?>