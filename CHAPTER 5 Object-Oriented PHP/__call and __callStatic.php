<?php
class Politician {
    public function __call($method, $arguments) {
        echo __CLASS__ . ' has no ' . $method . ' method';
    }
}
$jacob = new Politician();
$jacob->honesty(); // Politician has no honesty method