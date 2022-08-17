<?php
interface PaymentProvider
{
    public function showPaymentPage();
    public function contactGateway(array $messageParameters);
    public function notify(string $email);
}

class CreditCard implements PaymentProvider
{
    public function showPaymentPage() {
        // implementation
    }
    public function contactGateway() {
        // PHP Fatal error:  Declaration of CreditCard::contactGateway() must be compatible with PaymentProvider::contactGateway(array $messageParameters)
    }
    public function notify(string $email) {
        // implementation
    }
}