<?php
// Сделайте класс Num, у которого будут два публичных статических свойства: num1 и num2.
// Запишите в первое свойство число 2, а во второе - число 3. Выведите сумму значений свойств на экран.
class Num {
    public static $num1 = 2;
    public static $num2 = 3;

    // Сделайте в классе Num метод getSum, который будет выводить на экран сумму значений свойств num1 и num2.
    public static function getSum() {
        return self::$num1 + self::$num2;
    }
}

echo Num::getSum();