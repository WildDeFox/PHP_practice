<?php
// Сделайте класс Employee (работник), в котором будут следующие свойства -
// name (имя), age (возраст), salary (зарплата).
class Employee {
    public $name;
    public $age;
    public $salary;
}

// Создайте объект класса Employee, затем установите его свойства в
// следующие значения - имя 'john', возраст 25, зарплата 1000.
$emp1 = new Employee();
$emp1 -> name = 'john';
$emp1 -> age = 25;
$emp1 -> salary = 1000;


// Создайте второй объект класса Employee, установите его свойства
// в следующие значения - имя 'eric', возраст 26, зарплата 2000.
$emp2 = new Employee();
$emp2 -> name = 'eric';
$emp2 -> age = 26;
$emp2 -> salary = 2000;

// Выведите на экран сумму зарплат созданных юзеров.
echo $emp2 -> salary + $emp1 -> salary . '<br>';

// Выведите на экран сумму возрастов созданных юзеров.
echo $emp1 -> age + $emp2 -> age;