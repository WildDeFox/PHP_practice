<?php
$xml = simplexml_load_file('test.xml');

echo $xml->{'user-name'} . '<br>';
echo $xml->{'user-surn'} . '<br>';
