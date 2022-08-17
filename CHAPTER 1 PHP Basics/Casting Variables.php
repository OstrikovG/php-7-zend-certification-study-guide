<?php
$a = '123'; // $a is a string
$a = (int)$a; // $a is now an integer
$a = (bool)$a; // $a is now Boolean and is true

$a = "Hello World";
$a = (unset)$a; // Deprecated in PHP 7.2
var_dump($a); // NULL

$a = 1234.56;
echo (int)$a; // 1234 (not 1235)
$a = -1234.56;
echo (int)$a; // -1234

$examples = [
    "12 o clock",
    "Half past 12",
    "12.30",
    "7.2e2 minutes after midnight"
];
foreach ($examples as $example) {
    $result = 0 + $example;
    var_dump($result);
}
/*
This outputs:
 int(12)
 int(0)
 double(12.3)
 double(720)
*/