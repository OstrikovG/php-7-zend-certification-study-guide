<?php
class MyClass
{
    // Static functions are declared with the static keyword
    public static function sayHello() {
        echo "Hello World" . PHP_EOL;
    }
    public function someFunction() {
        // self refers to "this class", like $this refers to an object
        self::sayHello();
    }
}
// Static functions can be accessed with the scope resolution operator.
MyClass::sayHello(); // Hello World
$object = new MyClass();
$object->someFunction(); // Hello World