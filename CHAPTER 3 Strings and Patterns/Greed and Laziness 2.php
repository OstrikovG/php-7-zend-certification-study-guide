<?php
$subject = "Some <strong>html</strong> text";
$pattern = "/<.*?>/"; // note the pattern has changed
$matches = [];
preg_match($pattern, $subject, $matches);
var_dump($matches[0]); // string(8) "<strong>"