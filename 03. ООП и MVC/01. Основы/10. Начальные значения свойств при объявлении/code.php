<?php
require_once 'Arr.php';
$arr = new Arr();

$arr -> addArr([1, 2, 3]);
echo $arr -> getSum() . '<br>';
$arr -> addArr([4, 5, 6]);
echo $arr -> getSum() . '<br>';
echo $arr -> getAvg() . '<br>';