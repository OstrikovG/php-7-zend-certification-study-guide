<?php
function generator() {
    for ($i = 0; $i < 99; $i++) {
        yield $i;
    }
}
foreach (generator() as $value) {
    echo $value . " ";
}