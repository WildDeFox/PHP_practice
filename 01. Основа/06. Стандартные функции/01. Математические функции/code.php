<?php
// Работа со степенью и корнем

// Возведите 2 в 10 степень.
echo pow(2, 10) . '<br>';

// Найдите квадратный корень из 245.
echo sqrt(245) . '<br>';

// Найдите корень из суммы квадратов его элементов.
$sum = 0;
$arr = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr as $elem) {
    $sum += pow($elem, 2);
}
echo sqrt($sum) . '<br>';


// Работа с функциями округления

// Найдите квадратный корень из 379. Результат округлите до целых, до десятых, до сотых.
echo round(sqrt(379)). '<br>';
echo round(sqrt(379), 1). '<br>';
echo round(sqrt(379), 2). '<br>';

// Найдите квадратный корень из 587. Округлите результат в большую и меньшую сторону,
// запишите результаты округления в ассоциативный массив с ключами 'floor' и 'ceil'.
$result = sqrt(587);
$arr1 = ['floor' => floor($result),
         'ceil' => ceil($result)];
var_dump($arr1);
echo '<br>';


// Работа с min и max

// Найдите минимальное и максимальное число.
$arr2 = [4, -2, 5, 19, -130, 0, 10];
echo min($arr2) . '<br>';
echo max($arr2) . '<br>';


// Работа с рандомом

// Выведите на экран случайное целое число от 1 до 100.
echo mt_rand(1, 100) . '<br>';

// С помощью цикла заполните массив 10-ю случайными целыми числами.
$arr3 = [];
for ($i = 0; $i < 10; $i++) {
    $arr3[] = mt_rand(1, 100);
}
var_dump($arr3);