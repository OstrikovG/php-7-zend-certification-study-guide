<?php
$requiredKeys = ['username', 'password', 'csrf_token'];
$missingKeys = array_diff($requiredKeys, array_keys($_POST));
if (count($missingKeys)) {
    throw new UnexpectedValueException('You need to provide
[' . print_r($missingKeys, true) . ']');
}