<?php
$xml = simplexml_load_file('test.xml');
echo $xml -> user['age'] . '<br>';
echo $xml -> user['salary'] . '<br>';
echo $xml -> user . '<br>';
