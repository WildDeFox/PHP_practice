<?php
// Сделайте класс Employee, в котором будут следующие приватные свойства: name, age и salary.
class Employee {
    private $name;
    private $age;
    private $salary;

    // Сделайте геттеры и сеттеры для всех свойств класса Employee.
    public function getName() {
        return $this -> name;
    }

    public function getAge() {
        return $this -> age;
    }

    // Пусть зарплата наших работников хранится в долларах.
    // Сделайте так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара
    public function getSalary() {
        return $this -> salary . '$';
    }

    public function setName($name) {
        $this -> name = $name;
    }

    // Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст на
    // корректность (от 1 до 100 лет). Этот метод должен использоваться в сеттере setAge перед
    // установкой нового возраста (если возраст не корректный - он не должен меняться).
    public function setAge($age) {
        if ($this->isAgeCorrect($age)) {
            $this -> age = $age;
        }
    }

    public function setSalary($salary) {
        $this -> salary = $salary;
    }

    private function isAgeCorrect($age) {
        if ($age > 1 and $age < 100) {
            return true;
        } else {
            return false;
        }
    }
}