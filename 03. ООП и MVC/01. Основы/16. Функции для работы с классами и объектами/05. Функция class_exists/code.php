<?php
// Пусть у вас есть класс Test1 и нет класса Test2. Проверьте,
// что выведет функция class_exists для класса Test1 и для класса Test2.
class Test1 {
    public $name;
}

echo class_exists('Test1');
echo class_exists('Test2');