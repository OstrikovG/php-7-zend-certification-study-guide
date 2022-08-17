<?php
$arrOne = [
    // integer
    0 => 'One 0',
    // string
    'a' => 'One a',
    // non-empty in One, but empty in Two
    'Overwrite' => 'Not empty',
];
$arrTwo = [
    0 => 'Two 0',
    1 => 'Two 1',
    'b' => 'Two b',
    'Overwrite' => '',
];

print_r($arrOne + $arrTwo);
print_r(array_merge($arrOne, $arrTwo));
/*
Array
(
    [0] => One 0
    [a] => One a
    [Overwrite] => Not empty
    [1] => Two 1
    [b] => Two b
)
Array
(
    [0] => One 0
    [a] => One a
    [Overwrite] =>
    [1] => Two 0
    [2] => Two 1
    [b] => Two b
)
 */