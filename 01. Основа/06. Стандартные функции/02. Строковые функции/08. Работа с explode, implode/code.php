<?php
// Дана строка 'html css php'. Запишите каждое слово этой строки в отдельный элемент массива.
$arr = explode(' ', 'html css php');
var_dump($arr);
echo '<br>';

// Дан массив с элементами 'html', 'css', 'php'. С помощью implode
// создайте строку из этих элементов, разделенных запятыми.
$arr1 = ['html', 'css', 'php'];
$str = implode(', ', $arr1);
echo $str;