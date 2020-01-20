<?php
$doc = new DOMDocument();
$doc->loadXML('<root />');
$el = $doc->createElement('test', 'some value');
$doc->formatOutput = true;
echo $doc->saveXML();
?>