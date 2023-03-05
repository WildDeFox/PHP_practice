<?php
// Переменная $num может принимать значения 1, 2, 3 или 4.
// Определите, в какую пору года попадает значение этой переменной.
$num = 2;

switch ($num) {
    case 1:
        echo 'Весна';
        break;
    case 2:
        echo 'Лето';
        break;
    case 3:
        echo 'Осень';
        break;
    case 4:
        echo 'Зима';
        break;
    default:
        echo 'Неверное значение';
        break;
}