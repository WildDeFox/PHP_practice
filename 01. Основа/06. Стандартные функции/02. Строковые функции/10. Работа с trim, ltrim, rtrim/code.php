<?php
// Дана строка. Очистите ее от концевых пробелов.
$str = ' 12345 ';
echo rtrim($str) . '<br>';

// Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.
echo trim('/php/', '/') . '<br>';