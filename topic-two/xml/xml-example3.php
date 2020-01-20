<?php
$xml = simplexml_load_file('movie.xml');

foreach ($xml->movie as $movies) {
    echo $movies->title . "<br>";
}
?>