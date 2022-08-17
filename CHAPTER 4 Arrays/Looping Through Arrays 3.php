<?php
// assigning to scalars
list($animal, $food, $mood) = ['cat', 'cheeseburgers', 'grumpy'];
echo "{$animal}s eat $food except when they're $mood." . PHP_EOL;
// assigning to an array
$info = [];
list($info[0], $info[1], $info[2]) = ['cat', 'cheeseburgers', 'grumpy'];
var_dump($info);
/*
array(3) {
  [0] =>
  string(3) "cat"
  [1] =>
  string(13) "cheeseburgers"
  [2] =>
  string(6) "grumpy"
}
 */