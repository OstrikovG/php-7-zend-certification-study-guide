<?php
$putVariables = [];
parse_str(file_get_contents("php://input"), $putVariables);
var_dump($putVariables);