<?php
function addOne(&$arg) {
    $arg++;
}
$a = 0;
addOne($a);
echo $a; // 1