<?php
class User {
    public function __construct($name) {
        $this->name = $name;
    }
}
$user = new User('Alice');