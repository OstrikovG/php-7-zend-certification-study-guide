<?php
function sowCrops() { return 'wheat'; }
function millWheat() { return 'flour'; }
function bake($flour) { return 'cupcake'; }
function generator() {
    $wheat = yield sowCrops();
    $flour = yield millWheat();
    return bake($flour);
};
$gen = generator();
foreach ($gen as $key => $value) {
    echo $key . ' => ' . $value . PHP_EOL;
}
echo $gen->getReturn();
/*
0 => wheat
1 => flour
cupcake
*/