<?php
// Выведите на экран случайный ключ из данного массива.
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
var_dump(array_rand($arr));

// Выведите на экран случайный элемент данного массива.
var_dump($arr[array_rand($arr)]);