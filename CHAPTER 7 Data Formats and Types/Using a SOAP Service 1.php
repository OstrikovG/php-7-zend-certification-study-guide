<?php
$client = new SoapClient("https://www.dataaccess.com/webservicesserver/NumberConversion.wso?wsdl");
$params = ['ubiNum' => 500];
$result = $client->__soapCall('NumberToWords', array($params));
var_dump($result);


