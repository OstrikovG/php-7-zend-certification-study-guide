<?php
ini_set('soap.wsdl_cache', 0);
// first run server with `php -S localhost:12312 soapServerWithoutWSDL.php`
$client = new SoapClient(null,
    [
        'location' => 'http://localhost:12312/soapServerWithoutWSDL.php',
        'uri' => 'http://localhost:12312/soapServerWithoutWSDL.php',
    ]
);

$result = $client->hello();
var_dump($result);

