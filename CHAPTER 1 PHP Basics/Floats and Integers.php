<?php
echo (int) ( (0.1+0.7) * 10 ); // 7
echo (int) ( (0.1+0.5) * 10); // 6

$pi = 3.14159625;
$indiana = 3.2;
$epsilon = 0.00001; // degree of error
if(abs($pi - $indiana) < $epsilon) {
    echo "Those values look the same to me";
} else {
    echo "Those values are different";
}