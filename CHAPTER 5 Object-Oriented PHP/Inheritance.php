<?php
class ParentClass
{
    public function sayHello() {
        echo __CLASS__;
    }
}
class ChildClass extends ParentClass
{
    // nothing in this class
}
$kid = new ChildClass;
$kid->sayHello(); // ParentClass