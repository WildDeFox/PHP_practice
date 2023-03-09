<?php
// Запишите в массив $keys ключи из этого массива, а в $values – значения.
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($arr);
$values = array_values($arr);
var_dump($keys);
var_dump($values);


$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];

$arr3 = array_combine($arr1, $arr2);
var_dump($arr3);