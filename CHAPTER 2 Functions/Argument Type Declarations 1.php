<?php
interface PaymentProviderInterface {}
class Employee {}

// $itemName must be a string and $details must be an array
function addToShoppingCart(string $itemName, array $details) {}
/*
$paymentObject must be an object that either:
implements the PaymentProviderInterface interface,
or is any child of a class that does
*/
function requestPayment(PaymentProviderInterface $paymentObject) {}
/*
$employee must be an object that is either:
an instance of the Employee class,
or is any child of a class that does
*/
function calculateWage(Employee $employee) {}
// $callback must be a callable
function performCalculation(callable $method) {}