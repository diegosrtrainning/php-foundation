<?php
$dom = new DOMDocument('1.0', 'UTF-8');
$root = $dom->appendChild($dom->createElement('Movies'));
$movie = new DOMElement('movie');
$title = new DOMElement('title', 'A History of Violence');
$root->appendChild($movie)->appendChild($title);
$movie->appendChild(new DOMElement('year', '2005'));
$movie->appendChild(new DOMElement('country', 'USA'));
$movie->appendChild(new DOMElement('genre', 'crime'));
$director = new DOMElement('director');
$movie->appendChild($director);
$director->appendChild(new DOMElement('last_name', 'Caroline'));
$director->appendChild(new DOMElement('first_name', 'Anne'));
$director->appendChild(new DOMElement('birth_day', '1990'));
$dom->formatOutput = true; //Formata (identa) o XML
echo $dom->saveXML();



?>