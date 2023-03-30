<?php
// Сделайте класс Test с методом method1 и без метода method2.
// Проверьте, что выведет функция method_exists для метода method1 и для метода method2.
class Test {
    public function method1() {
        return 'This is text';
    }
}

echo method_exists('Test', 'method1');
echo method_exists('Test', 'method2');