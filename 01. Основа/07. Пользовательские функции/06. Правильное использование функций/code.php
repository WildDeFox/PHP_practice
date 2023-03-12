<?php
// С помощью приведенной функции найдите все года от 1 до 2030, сумма цифр которых равна 13.
$arr = [];
for ($i = 1; $i <= 2023; $i++) {
    if (getDigitsSum((string)$i) === 13) {
        array_push($arr, $i);
    }
}
function getDigitsSum($num) {
    return array_sum(str_split($num));
}

var_dump($arr);

