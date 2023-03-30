<?php
// Сделайте класс Test со свойством prop1 и без свойства prop2.
// Проверьте, что выведет функция property_exists для свойства prop1 и для свойства prop2.
class Test {
    public $prop1;
    public $prop2;
}

echo property_exists('Test', 'prop1');
echo property_exists('Test', 'prop2');