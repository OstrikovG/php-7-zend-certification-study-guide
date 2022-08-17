<?php
$a = ['a', 'b', '1'];
$b = ['a', 'b', 1];
$c = ['1', 'b', 'a'];
$d = [2 => 1, 0 => 'a', 1 => 'b'];
var_dump($a == $b); // true
var_dump($a === $b); // false
var_dump($a == $c); // false
var_dump($a == $d); // true
var_dump($a === $d); // false