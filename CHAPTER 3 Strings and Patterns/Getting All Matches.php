<?php
$subject = "Some <strong>html</strong> text";
$pattern = "/<.*?>/";
$matches = [];
preg_match_all($pattern, $subject, $matches);
var_dump($matches);
/*
array(1) {
 [0] =>
 array(2) {
[0] => string(8) "<strong>"
[1] => string(9) "</strong>"
 }
 }
*/