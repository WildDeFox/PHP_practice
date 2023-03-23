<?php
// Сделайте класс Employee, в котором будут следующие публичные свойства - name, age, salary.
// Сделайте так, чтобы эти свойства заполнялись в конструкторе при создании объекта
class Employee {
    public $name;
    public $age;
    public $salary;

    function __construct($name, $age, $salary) {
        $this -> name = $name;
        $this-> age = $age;
        $this -> salary = $salary;
    }
}

$emp1 = new Employee('eric', 25, 1000);
$emp2 = new Employee('kyle', 30, 2000);
echo $emp1 -> salary + $emp2 -> salary;