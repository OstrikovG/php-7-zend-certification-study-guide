<?php
function printArray(array $arr) {
    echo "<pre>" . print_r($arr,true) . "</pre>";
}
// The parameter to the function must be a class that implements the PaymentProvider interface
function sendNotificationToPaymentProvider(PaymentProvider $paymentProvider)
{
    $paymentProvider->contactGateway($messageParameters);
}
function sayHello(string $name)
{
    echo "Hello " . $name;
}