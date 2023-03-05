<?php
// Найдите произведение целых чисел от 1 до 20.
$result = 0;
for ($i = 1; $i <= 20; $i++) {
    $result += $i;
}
echo $result . PHP_EOL;

// Найдите сумму четных чисел от 2 до 100.
$result1 = 0;
for ($i = 2; $i <= 100; $i += 2) {
    $result1 += $i;
}
echo $result1 . PHP_EOL;

// Найдите сумму нечетных чисел от 1 до 99.
$result2 = 0;
for ($i = 1; $i <= 99; $i += 2) {
    $result2 += $i;
}
echo $result2 . PHP_EOL;