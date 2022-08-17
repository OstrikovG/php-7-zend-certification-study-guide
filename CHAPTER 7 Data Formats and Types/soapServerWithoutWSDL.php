<?php
ini_set('soap.wsdl_cache', 0);

class HelloService {
    public function hello()
    {
        return 'Hello, World!';
    }
}

$options = ['uri'=>'http://localhost:12312/soapServerWithoutWSDL.php'];
$server = new SoapServer(NULL, $options);
$server->setClass(HelloService::class);
$server->handle();