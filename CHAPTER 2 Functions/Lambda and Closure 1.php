<?php
$lambda = function($a, $b) {
    echo $a + $b;
};
echo gettype($lambda); // object
echo (int)is_callable($lambda); // 1
echo get_class($lambda); // Closure