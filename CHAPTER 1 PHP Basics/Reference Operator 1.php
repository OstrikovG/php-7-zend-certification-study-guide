<?php
$a = 1;
$b = &$a; // assign by reference
$b += 5;
echo $a; // 6