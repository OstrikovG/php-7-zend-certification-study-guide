<?php
$a = $b = explode(' ', 'a1 a2 a10 a11 a12 a20 a21');
shuffle($a);
shuffle($b);
natsort($a);
sort($b);
print_r($a);
print_r($b);
/*
Array
(
    [4] => a1
    [2] => a2
    [3] => a10
    [1] => a11
    [0] => a12
    [6] => a20
    [5] => a21
)
Array
(
    [0] => a1
    [1] => a10
    [2] => a11
    [3] => a12
    [4] => a2
    [5] => a20
    [6] => a21
)
 */