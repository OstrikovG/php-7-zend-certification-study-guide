<?php
$number = 1234.5678;
// 1,235
echo number_format($number) . PHP_EOL;
// 1,234.568
echo number_format($number, 3) . PHP_EOL;
// 1.234,57
echo number_format($number, 2, ',', '.') . PHP_EOL;