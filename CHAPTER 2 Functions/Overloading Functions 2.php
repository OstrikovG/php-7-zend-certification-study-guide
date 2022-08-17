<?php
function myFunc($data) {
    $data = 'Changed';
    echo func_get_arg(0);
}
myFunc('Default'); // PHP 5, this outputs Variable, but in PHP 7, it outputs Changed