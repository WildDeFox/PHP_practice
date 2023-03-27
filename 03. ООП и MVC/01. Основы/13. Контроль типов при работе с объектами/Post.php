<?php
// Сделайте класс Post (должность), в котором будут следующие свойства, доступные только для чтения: name и salary.
class Post {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this -> name = $name;
        $this -> salary = $salary;
    }

    public function getNamePost() {
        return $this -> name;
    }

    public function getSalary() {
        return $this -> salary;
    }
}