<?php
class Dictatorship {
    private $wmd = 'Nuke';
    public $oil = 'Lots';
    // we are going to hide our wmd
    public function __debugInfo() {
        return [
            'oil' => $this->oil
        ];
    }
}
$country = new Dictatorship();
var_dump($country);
/*
object(Dictatorship)#1 (1) {
 ["oil"]=>
 string(4) "Lots"
}
*/