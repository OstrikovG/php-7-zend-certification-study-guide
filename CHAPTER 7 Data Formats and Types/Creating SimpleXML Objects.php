<?php
$xmlString = <<<XML
<?xml version="1.0"?>
<collection>
    <cd id="1">
        <title>Fight for your mind</title>
        <artist>Ben Harper</artist>
        <year>1995</year>
    </cd>
    <cd id="2">
        <title>Electric Ladyland</title>
        <artist>Jimi Hendrix</artist>
        <year>1997</year>
    </cd>
</collection>
XML;

// procedural from string variable
$xml = simplexml_load_string($xmlString);
// procedural from file
$xml = simplexml_load_file('Creating SimpleXML Objects.xml');
// object oriented from variable
$xml = new SimpleXMLElement($xmlString);