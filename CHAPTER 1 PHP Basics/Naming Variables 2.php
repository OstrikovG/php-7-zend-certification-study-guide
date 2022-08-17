<?php
$a = 'foo';
$$a['bar'] = 'Murky code';
// this assert passes
assert($$a['bar'] === $foo['bar']);
var_dump($foo);
/*
array(1) {
  'bar' =>
  string(10) "Murky code"
}
*/