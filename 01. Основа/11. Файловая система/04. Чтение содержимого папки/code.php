<?php
$files = array_diff(scandir('dir'), ['..', '.']); // убираем папки с '.' и '..'

// Пусть в корне вашего сайта лежит папка dir, а в ней какие-то текстовые файлы.
// Выведите на экран столбец имен этих файлов.
foreach ($files as $elem) {
    echo $elem . '<br>';
}

// Пусть в корне вашего сайта лежит папка dir, а в ней какие-то текстовые файлы.
// Переберите эти файлы циклом и выведите их тексты в браузер.
foreach ($files as $elem) {
    echo file_get_contents('dir/' . $elem) . '<br>';
}

// Пусть в корне вашего сайта лежит папка dir, а в ней какие-то текстовые файлы.
// Переберите эти файлы циклом, откройте каждый из них и запишите в конец восклицательный знак.
foreach ($files as $elem) {
    $value = file_get_contents('dir/' . $elem);
    $value = $value . '!';
    file_put_contents('dir/' . $elem, $value);
}