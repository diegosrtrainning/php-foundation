<?php

try{
    $dom = new DOMDocument( "1.0", "UTF-8" );
    $root = $dom->appendChild($dom->createElement( "Movies"));
    $movie = new DOMElement('movie');
    $title = new DOMElement('title', 'A History of Violence');
    $root->appendChild($movie)->appendChild($title);
    $movie->appendChild(new DOMElement('year', 2005));
    $movie->appendChild(new DOMElement('country', 'USA'));
    $movie->appendChild(new DOMElement('genre', 'crime'));
    $director = new DOMElement('director');
    $movie->appendChild($director);
    $director->appendChild(new DOMElement('last_name', 'Cronenberg'));
    $director->appendChild(new DOMElement('first_name', 'David'));
    $director->appendChild(new DOMElement('birth_date', 1943));
    $dom->formatOutput = true;
    echo $dom->saveXML();
} catch (DOMException $e){
    echo 'handle error';
}
?>