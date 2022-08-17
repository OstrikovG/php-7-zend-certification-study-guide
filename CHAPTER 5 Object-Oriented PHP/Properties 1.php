<?php
class Properties
{
    // You do not have to specify a default value
    public $email;
    // A scalar value is an expression
    protected $name = 'Alice';
    // An array is an expression
    protected $accounts = ['cheque', 'savings'];
    // You can use a constant expression as a default value
    private $balance = 60 * 5;
}