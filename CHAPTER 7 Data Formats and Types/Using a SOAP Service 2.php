<?php
$client = new SoapClient(null,
    [
        'location' => 'https://www.dataaccess.com/webservicesserver/NumberConversion.wso',
        'uri' => 'http://www.dataaccess.com/webservicesserver/',
        'style' => SOAP_DOCUMENT,
        'use' => SOAP_LITERAL
    ]
);

$xmlString = <<<XML
    <NumberToWords xmlns="http://www.dataaccess.com/webservicesserver/">
      <ubiNum>500</ubiNum>
    </NumberToWords>
XML;

$params = new \SoapVar($xmlString, XSD_ANYXML);
$result = $client->NumberToWords($params);
var_dump($result);


