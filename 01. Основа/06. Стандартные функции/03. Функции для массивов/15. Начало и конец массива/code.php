<?php
// Выведите на экран его первый и последний элемент, причем так, чтобы в исходном массиве они исчезли.
$arr = [1, 2, 3, 4, 5];
echo array_shift($arr);
echo array_pop($arr);

// Добавьте ему в начало элемент 04. Модификаторы доступа public и private, а в конец - элемент 6.
array_unshift($arr, 0);
array_push($arr, 6);
var_dump($arr);
