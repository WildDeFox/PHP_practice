<?php
$xml = simplexml_load_file('test.xml');
echo $xml -> tag1 -> tag2 -> tag3;