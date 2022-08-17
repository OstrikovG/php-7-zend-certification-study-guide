<?php
// The delimiter is a string of any length
$delimiter = ',';
// This string is broken up by the delimiter
$source = '1, abc, 2, def, 3, ghi';
// The limit determines how many elements explode will return
$limit = -2;
// create an array by splitting the source
$arr = explode($delimiter, $source, $limit);
print_r($arr);
/*
Array
(
    [0] => 1
    [1] =>  abc
    [2] =>  2
    [3] =>  def
)
 */