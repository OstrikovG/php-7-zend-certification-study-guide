<?php
$arr = [
    'a' => 'apple',
    'b' => 'banana',
    'c' => 'cherry'
];
foreach($arr as $value) {
    echo $value . PHP_EOL;
}
foreach($arr as $key => $value) {
    echo $key . ' = ' . $value . PHP_EOL;
}