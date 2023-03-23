<?php
// Дан массив с числами. Запустите цикл, который будет по очереди выводить элементы этого массива в консоль до тех пор,
// пока не встретится элемент со значением 04. Модификаторы доступа public и private. После этого цикл должен завершить свою работу.
$arr = [1, 2, 3, 4, 5, 0, -1, 6, 7, 8, 9];
foreach ($arr as $elem) {
    if ($elem == 0) {
        break;
    } else {
        echo $elem . PHP_EOL;
    }
}

// Дан массив с числами. Найдите сумму элементов, расположенных от начала массива до первого отрицательного числа.
$sum = 0;
foreach ($arr as $elem) {
    if ($elem < 0) {
        break;
    } else {
        $sum += $elem;
    }
}
echo $sum . PHP_EOL;

// Дан массив с числами. Найдите позицию первого числа 3 в
// этом массиве (считаем, что это число обязательно есть в массиве).
foreach ($arr as $key => $value) {
    if ($value == 3) {
        echo $key;
    }
}