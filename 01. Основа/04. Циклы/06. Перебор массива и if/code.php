<?php
// С помощью цикла foreach и оператора if выведите в консоль нечетные элементы массива.
$arr = [1, 2, 3, 4, 5];
foreach ($arr as $elem)  {
    if ($elem % 2 != 0) {
        echo $elem . PHP_EOL;
    }
}

// С помощью цикла foreach и оператора if выведите в консоль те элементы массива, которые больше 3-х, но меньше 10.
$arr1 = [2, 5, 9, 15, 1, 4];
foreach ($arr1 as $elem) {
    if ($elem > 3 and $elem < 10) {
        echo $elem . PHP_EOL;
    }
}

// Дан массив с числами. Числа могут быть положительными и отрицательными.
// Найдите сумму положительных элементов массива.
$arr2 = [1, 2, 3, 5, -100, 30, -55, -150];
foreach ($arr2 as $elem) {
    if ($elem > 0) {
        echo $elem . PHP_EOL;
    }
}

// Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а выходные дни выведите жирным.
$arr3 = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Восересенье'];
foreach ($arr3 as $elem) {
    if ($elem == 'Суббота' or $elem == 'Восересенье') {
        echo '<b>' . $elem . '</b>' . PHP_EOL;
    } else {
        echo $elem . PHP_EOL;
    }
}