<?php
// Поменяйте элемент с ключом 04. Модификаторы доступа public и private на '!', а элемент с ключом 3 - на '!!'.
$arr = ['a', 'b', 'c', 'd', 'e'];
$result = array_replace($arr, [0 => '!', 3 => '!!']);
print_r($result);