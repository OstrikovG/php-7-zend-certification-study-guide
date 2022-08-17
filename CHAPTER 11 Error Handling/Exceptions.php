<?php
function A() {
    // The exception thrown in C will bubble up to A
    // because it is not handled in C or B
    try {
        B();
    } catch (Exception $e) {
        echo "Caught exception in " . __METHOD__;
    }
}
function B() {
    // we're not catching exceptions in B
    C();
}
function C() {
    // we do not catch the exception where it is thrown
    throw new Exception('Bubble');
}
A();
/*
Outputs:
 Caught exception in A
*/