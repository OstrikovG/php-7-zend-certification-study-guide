<?php
class A
{
    public $a;

    public function aMethod() {
        return A::class;
    }
}
$objectOriginal = new A;
$string = serialize($objectOriginal);
file_put_contents('serialize.txt', $string);
// in another PHP file
$string = file_get_contents('serialize.txt');
$objectCopy = unserialize($string);

var_dump($objectOriginal);
var_dump($objectCopy);