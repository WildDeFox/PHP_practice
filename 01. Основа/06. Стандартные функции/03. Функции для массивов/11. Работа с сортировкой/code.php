<?php
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];

// По возрастанию элементов
sort($arr);
var_dump($arr);

// По убыванию элементов
rsort($arr);
var_dump($arr);