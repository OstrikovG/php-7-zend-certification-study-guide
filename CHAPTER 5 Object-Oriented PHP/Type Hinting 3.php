<?php
class A {}
class B extends A {}
class C extends B {}
function foo(A $object) {}
$testObj = new C;
foo($testObj); // no error produced