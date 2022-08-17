<?php
$domDoc = new DomDocument();
$domDoc->load("DOM.xml");
// $domDoc->loadXML($xmlString);
// $domDoc->loadHTMLFile("index.html");
// $domDoc->loadHTML($htmlDocumentString);
$domDoc->save('DOM-copy.xml'); // (to a file in XML format)
$xmlString = $domDoc->saveXML();
$htmlDocumentString = $domDoc->saveHTML();
$domDoc->saveHTMLFile('DOM-copy.html'); // (to a file in HTML format)
$xpath = new DomXpath($domDoc);
$elements = $xpath->query("//*[@id]"); // find all elements with an id
echo "I found {$elements->length} elements\n";
if (!is_null($elements)) {
    foreach ($elements as $element) {
        /** @var DomNode $element */
        echo "\n[". $element->nodeName."#".$element->getAttribute('id'). "]";
        $nodes = $element->childNodes;
        foreach ($nodes as $node) {
            echo $node->nodeValue;
        }
    }
}