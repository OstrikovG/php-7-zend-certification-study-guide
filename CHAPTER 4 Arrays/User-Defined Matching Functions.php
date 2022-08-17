<?php
$birds = ['duck', 'chicken', 'goose'];
$net = ['Dog', 'Cat', 'Chicken', 'Goose', 'Hamster'];
$diff = array_udiff($net, $birds, function($a, $b){
    $a = strtolower($a);
    $b = strtolower($b);
    if ($a < $b) {
        return -1;
    } elseif ($a > $b) {
        return 1;
    } else {
        return 0;
    }
});
print_r($diff);