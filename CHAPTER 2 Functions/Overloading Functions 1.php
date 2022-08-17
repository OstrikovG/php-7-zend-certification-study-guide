<?php
function myFunc() {
    foreach(func_get_args() as $arg => $value) {
        echo "$arg is $value" . PHP_EOL;
    }
}
myFunc('variable', 3, 'parameters');
/*
0 is variable
1 is 3
2 is parameters
*/