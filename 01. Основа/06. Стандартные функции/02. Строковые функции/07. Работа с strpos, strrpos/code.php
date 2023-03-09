<?php
// Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.
echo strpos('abc abc abc', 'b') . '<br>';

// Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
echo strrpos('abc abc abc', 'b') . '<br>';

// Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b',
// если начать поиск не с начала строки, а с позиции 3.
echo strpos('abc abc abc', 'b', 3) . '<br>';

// Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.
echo strpos('aaa aaa aaa aaa aaa', ' ') . '<br>';

// Проверьте, что в строке есть две точки подряд.
$str = '..123.3212141';
$res = strpos($str, '..');
if ($res !== false) {
    echo 'Есть две точки подряд' . '<br>';
} else {
    echo 'Нет' . '<br>';
}