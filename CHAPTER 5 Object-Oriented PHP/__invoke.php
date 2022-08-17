<?php
class Square
{
    public function __invoke($var) {
        return $var ** 2;
    }
}
$callableObject = new Square;
echo $callableObject(10); // 100