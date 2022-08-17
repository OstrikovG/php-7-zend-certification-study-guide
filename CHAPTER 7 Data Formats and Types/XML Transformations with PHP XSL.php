<?php
$xslDoc = new \DOMDocument();
$xslDoc->load("XML Transformations with PHP XSL.xsl");
$xmlDoc = new \DOMDocument();
$xmlDoc->load("XML Transformations with PHP XSL.xml");
$proc = new XSLTProcessor();
$proc->importStylesheet($xslDoc);
echo $proc->transformToXML($xmlDoc);