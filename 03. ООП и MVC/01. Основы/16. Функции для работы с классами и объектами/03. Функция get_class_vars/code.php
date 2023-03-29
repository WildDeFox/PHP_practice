<?php
// Сделайте класс Test с публичными свойствами prop1 и prop2, а также с приватными свойствами prop3 и prop4.
class Test {
    public $prop1 = 2;
    public $prop2;
    private $prop3 = 3;
    private $prop4;

    // Вызовите функцию get_class_vars внутри класса Test (например, в конструкторе). Выведите массив доступных свойств.
    public function __construct() {
        var_dump(get_class_vars('Test'));
    }

}

// Вызовите функцию get_class_vars снаружи класса Test. Выведите массив доступных свойств.
$testVars = get_class_vars('Test');
var_dump($testVars);
$test = new Test();