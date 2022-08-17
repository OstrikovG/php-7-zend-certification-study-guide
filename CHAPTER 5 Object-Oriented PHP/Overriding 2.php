<?php
class ParentClass
{
    public function __construct()
    {
        echo __CLASS__;
    }
}
class ChildClass extends ParentClass
{
    public function __construct() {
        parent::__construct();
 }
}

(new ChildClass); // ParentClass