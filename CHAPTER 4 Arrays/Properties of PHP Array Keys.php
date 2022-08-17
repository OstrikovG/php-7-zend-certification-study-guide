<?php
$a = [
    "2" =>"hello",
    0x03 =>"world",
    0b100 => ' this is ',
    "04" =>"PHP",
    8.7 =>"!!!!"
];
var_dump($a);
/*
array(5) {
 [2]=>
 string(5) "hello"
 [3]=>
 string(5) "world"
 [4]=>
 string(9) " this is "
 ["04"]=>
 string(3) "PHP"
 [8]=>
 string(4) "!!!!"
}
*/