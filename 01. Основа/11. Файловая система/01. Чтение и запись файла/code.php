<?php
$num1 = file_get_contents('src/1.txt');
$num2 = file_get_contents('src/2.txt');
$sum = $num1 + $num2;
file_put_contents('src/sum.txt', $sum);
echo file_get_contents('src/Text.txt') . '<br>';

// Пусть у вас есть файл, в котором записано некоторое число.
// Откройте этот файл, возведите число в квадрат и запишите обратно в файл.
$sum3 = file_get_contents('src/sum.txt');
$sum3 = $sum3 ** 2;
file_put_contents('src/sum.txt', $sum3);