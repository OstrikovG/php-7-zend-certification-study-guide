<?php
$input = [1,2,3];
$replacement = ['hello', 'world'];
// $slice contains the piece we extract
$slice = array_splice($input, 1, 1, $replacement);
// $input is passed by reference and so is amended
print_r($input);