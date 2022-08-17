<?php
ini_set('soap.wsdl_cache', 0);
// first run server with `php -S localhost:12312 soapServer.php`
$client = new SoapClient("http://localhost:12312/soapServer.php?wsdl", array('trace' => 1));
$result = $client->hello();
var_dump($result);

