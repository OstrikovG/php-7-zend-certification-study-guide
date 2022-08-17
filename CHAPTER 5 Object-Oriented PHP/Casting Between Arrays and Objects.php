<?php
$array = [
    'key' => 'value',
    'nested_array' => [
        'another_key' => 'different_value'
    ]
];
$object = (object)$array;
var_dump($object);