<?php
$arr = [
    'a' => 'apple',
    'b' => 'banana',
    'c' => 'cherry'
];
array_walk($arr, function(&$value, $key) {
    $value = strtoupper($value);
});
print_r($arr);