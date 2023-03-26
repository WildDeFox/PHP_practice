<?php
require_once 'User.php';
class Employee extends User {
    private $salary;

    public function getSalary() {
        return $this -> salary;
    }

    public function setSalary($salary) {
        $this -> salary = $salary;
    }

    // Добавьте в класс метод setName, в котором будет выполняться проверка того, что длина имени более 3-х символов
    // и менее 10 символов. Пусть этот метод использует метод setName своего родителя, чтобы выполнить часть проверки.
    public function setName($name)
    {
        if (count($name) < 10) {
            parent::setName($name);
        }
    }
}