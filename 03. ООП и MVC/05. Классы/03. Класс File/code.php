<?php
require_once 'File.php';
// $obj = new File('C:\OSPanel\domains\PHP_Practice\03. ООП и MVC\05. Классы\03. Класс File\File.php');

// echo $obj -> getPath() . '<br>';
// echo $obj -> getDir() . '<br>';
// echo $obj -> getName() . '<br>';
// echo $obj -> getExt() . '<br>';
// echo $obj -> getSize() . '<br>';

$text = new File('C:\OSPanel\domains\PHP_Practice\03. ООП и MVC\05. Классы\03. Класс File\Test.txt');

echo $text -> getPath() . '<br>';
echo $text -> getDir() . '<br>';
echo $text -> getName() . '<br>';
echo $text -> getExt() . '<br>';
echo $text -> getSize() . '<br>';

// echo $text -> getText() . '<br>';
// $text -> setText('Тестовая строка, проверающая работоспособнось метода');
// echo $text -> getText() . '<br>';
// $text -> appendText('Пробуем добавить текст в конец файла...');
// echo $text -> getText() . '<br>';
