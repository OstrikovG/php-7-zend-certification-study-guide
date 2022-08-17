<?php
abstract class Paintings
{
    abstract protected function girlDescendingStairs();
    protected function persistenceOfMemory() {
        echo " I have an implementation so this is not an abstract method ";
    }
    public function __construct() {
        echo "I cannot be constructed!";
    }
}