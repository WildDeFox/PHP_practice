<?php
require_once 'File.php';
$obj = new File('C:\OSPanel\domains\PHP_Practice\03. ООП и MVC\05. Классы\03. Класс File\File.php');

echo $obj -> getPath() . '<br>';
echo $obj -> getDir();