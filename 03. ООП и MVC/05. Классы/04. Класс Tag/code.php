<?php
require_once 'Tag.php';
$input = new Tag('input');
echo $input->open();

$b = new Tag('b');
echo $b->open() . 'Привет' . $b->close();