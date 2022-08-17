<?php
class constructorExample
{
    // PHP4 style constructor - deprecated in PHP7
    public function constructorExample() {
        echo "Constructed!";
    }
}
$test = new constructorExample;