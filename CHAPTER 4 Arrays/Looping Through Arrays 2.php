<?php
$arr = [1,2,3];
foreach ($arr as $value) {
    $value += 1;
}
echo implode(', ', $arr) . PHP_EOL; // 1, 2, 3
echo $value . PHP_EOL; // 4
foreach ($arr as &$value) {
    $value += 1;
}
echo implode(', ', $arr) . PHP_EOL; // 2, 3, 4
echo $value;