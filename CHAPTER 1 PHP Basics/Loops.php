<?php
$arr = [
    'a' => 'one',
    'b' => 'two',
    'c' => 'three'
];
foreach ($arr as $value) {
    echo $value; // one, two, three
}
foreach ($arr as $key => $value) {
    echo $key; // a, b, c
    echo $value; // one, two, three
}