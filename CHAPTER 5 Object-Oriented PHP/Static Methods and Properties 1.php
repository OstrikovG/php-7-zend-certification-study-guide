<?php
class A
{
    // this is not a static method
    public function sayHello()
    {
        echo "Hello World";
    }
}
// Deprecated: Non-static method A::sayHello() should not be called statically
A::sayHello();