<?php
$stack = array("one", "two", "three", "four");
$fruit = array_shift($stack);
print_r($stack);
/*
 Array
 (
 [0] => two
 [1] => three
 [2] => four
 )
*/