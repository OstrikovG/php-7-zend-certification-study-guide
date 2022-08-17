<?php
$string = 'abcdef';
if (strpos($string, 'a') == false) {
    echo "False negative!" . PHP_EOL;
}