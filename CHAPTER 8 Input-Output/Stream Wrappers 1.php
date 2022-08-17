<?php
// reads the PUT body
$input = file_get_contents('php://input');
// parses the input into an array
parse_str($input, $params);
print_r($params);