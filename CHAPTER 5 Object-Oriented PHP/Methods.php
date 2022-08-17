<?php
class MethodExample
{
    private $name;
    // explicitly specified visibility
    public function setName($name) {
        $this->name = $name;
    }
    // public visibility by default
    function getName($name) {
        return $this->name;
    }
}