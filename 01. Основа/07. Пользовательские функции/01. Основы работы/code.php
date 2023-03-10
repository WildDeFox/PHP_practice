<?php
// Сделайте функцию, выводящую на экран ваше имя.
function func() {
    echo 'Nikita' . '<br>';
}

func();

// Сделайте функцию, выводящую на экран сумму чисел от 1 до 100.
function sumNum() {
    echo array_sum(range(1, 100)) . '<br>';
}
sumNum();