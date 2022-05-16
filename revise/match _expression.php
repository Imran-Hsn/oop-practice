<?php

$color = "green";
$type = match($color) {
    'red' => 'danger',
    'yellow', 'orange' => 'warning',
    'green' => 'success',
    default => 'Unknown'
};

echo $type;


?>