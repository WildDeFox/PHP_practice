<?php
$arr = ['a', 'b', 'c'];
$result = array_pad($arr, 6, '-');
var_dump($result);

// Заполните массив 10-ю буквами 'x'.
$arr1 = [];
$arr1 = array_pad($arr, 10, 'x');
var_dump($arr1);