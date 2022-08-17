<?php
function addOne($arg) {
    $arg++;
}
$a = 0;
addOne(&$a); // fatal error as of PHP 5.4.0
echo $a;