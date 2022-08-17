<?php
$keys = range(1, 10, 2);
$value = "PHP";
print_r(array_fill_keys($keys, $value));
/*
Array
(
    [1] => PHP
    [3] => PHP
    [5] => PHP
    [7] => PHP
    [9] => PHP
)
*/