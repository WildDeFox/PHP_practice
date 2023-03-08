<?php
// Проверьте, что в этом массиве есть элемент 'c'. Если есть - выведите 'да', а если нет - выведите 'нет'.
$arr = ['a', 'b', 'c', 'd', 'e'];
$flag = false;
foreach ($arr as $elem) {
    if ($elem === 'c') {
        $flag = true;
        break;
    }
}

if ($flag) {
    echo 'Есть';
} else {
    echo 'Нет';
}