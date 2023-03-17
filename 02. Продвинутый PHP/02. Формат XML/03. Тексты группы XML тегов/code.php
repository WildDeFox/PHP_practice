<?php
$xml = simplexml_load_file('test.xml');

foreach ($xml->name as $name) {
    echo $name . '<br>';
}