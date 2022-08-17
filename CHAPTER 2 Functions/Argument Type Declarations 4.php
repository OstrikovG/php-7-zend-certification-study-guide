<?php
declare(strict_types=1);
function sayHello(string $name) {
    echo gettype($name);
}
sayHello(100);
/*
Fatal error: Uncaught TypeError: Argument 1 passed to sayHello() must be of
the type string, integer given,
*/