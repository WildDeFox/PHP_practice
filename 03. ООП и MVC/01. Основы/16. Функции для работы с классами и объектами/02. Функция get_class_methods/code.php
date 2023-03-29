<?php
// Сделайте класс Test с методами method1, method2 и method3.
// С помощью функции get_class_methods получите массив названий методов класса Test.
class Test {
    public function method1():void {
        echo '1' . '<br>';
    }

    public function method2():void
    {
        echo '2' . '<br>';
    }

    public function method3():void
    {
        echo '3' . '<br>';
    }
}

$method_arr = get_class_methods(new Test());
var_dump($method_arr);

// Создайте объект класса Test, запишите его в переменную $test.
// С помощью функции get_class_methods получите массив названий методов объекта.
// Переберите его циклом и в цикле вызовите каждый метод класса, используя объект $test.
// Переберите этот массив циклом и в этом цикле вызовите каждый метод объекта.
$test = new Test();
$test_method = get_class_methods($test);

foreach ($test_method as $method) {
    $test -> $method();
}