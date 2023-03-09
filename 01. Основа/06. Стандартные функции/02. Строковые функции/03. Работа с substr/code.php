<?php
// Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
$str1 = 'html css php';
echo substr($str1, 0,4) . '<br>';
echo substr($str1, 4, 4) . '<br>';
echo substr($str1, 9, 3) . '<br>';

// Дана строка. Вырежьте и выведите на экран последние 3 символа этой строки.
echo substr($str1, -3) . '<br>';

// Дана строка. Проверьте, что она начинается на 'https://'.
$str2 = 'https://google.com';
if (substr($str2, 0, 8) == 'https://') {
    echo 'Верно';
} else {
    echo 'Неверно';
}