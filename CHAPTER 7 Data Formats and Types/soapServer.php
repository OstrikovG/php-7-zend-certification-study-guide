<?php
ini_set('soap.wsdl_cache', 0);

class HelloService {
    public function hello()
    {
        return 'Hello, World!';
    }
}

$server = new SoapServer('soapServer.wsdl');
$server->setClass(HelloService::class);
$server->handle();