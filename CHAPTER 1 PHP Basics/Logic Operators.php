<?php
$a = true;
$b = false;
$truth = $a and $b; // true
$pravda = $a && $b; // false
assert($truth === $pravda);
/*
 Warning: assert(): assert($truth === $pravda) failed
*/