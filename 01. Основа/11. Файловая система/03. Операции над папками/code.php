<?php
// Создайте в корне вашего сайта папку с названием dir.
mkdir('dir');

// Дан массив со строками. Создайте в корне вашего сайта папки, названиями которых служат элементы этого массива
$arr = ['dir1', 'dir2', 'dir3'];
foreach ($arr as $elem) {
    mkdir($elem);
}

// Удалите папку
rmdir('dir');