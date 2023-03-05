<?php
// Выведите столбец элементов этого массива на экран.
$arr = ['a', 'b', 'c', 'd', 'e'];
foreach ($arr as $elem) {
    echo $elem . '<br>';
}

// Найдите сумму элементов этого массива и выведите ее на экран.
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result1 = 0;
foreach ($arr1 as $elem) {
    $result1 += $elem;
}
echo $result1 . PHP_EOL;