<?php

require 'first.php';
require 'second.php';

function wow() {
    echo "Wow from <strong>index</strong> file";
}

use proFirst as pf;
use testSec as ts;

$boj = new pf\product();
$boj2 = new ts\product();


proFirst\wow();
testSec\hurrah();
wow();
?>