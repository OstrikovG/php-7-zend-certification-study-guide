<?php
$xmlString = <<<XML
<root>
<teams>
<team>Silverbacks</team>
<team foo="winner">Golden Eyes</team>
</teams>
</root>
XML;
$domDoc = new DOMDocument();

$domDoc->formatOutput = true;// Nicely formats output with indentation and extra space. This has no effect if the document was loaded with preserveWhitespace enabled.
$domDoc->preserveWhiteSpace = false;// Remove blank nodes

$domDoc->loadXML($xmlString);
$xpath = new DomXPath($domDoc);
$team2 = $xpath->query('teams/team[2]');

$parent = $xpath->query('teams');
$textElement = $domDoc->createElement('team', 'Bearhides');
$parent->item(0)->insertBefore($textElement, $team2->item(0));


var_dump($domDoc->saveXML());

