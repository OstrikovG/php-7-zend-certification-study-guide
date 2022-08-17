<?php
trait Example {
    public function myFunction() {
        // do stuff
    }
}
class VisbilityExample {
    use Example {
        myFunction as protected;
    }
}
$obj = new VisbilityExample();
$obj->myFunction(); // PHP Fatal error: Call to protected method