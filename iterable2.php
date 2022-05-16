<?php

function getIterabale():iterable {
    return ["a", "b", "c"];
}

$myIterable = getIterabale();
foreach($myIterable as $item) {
    echo $item;
}










?>