<?php
class User {
    public $name;
    public $age;

    // Метод для проверки возраста
    public function isAgeCorrect($age) {
        if ($age > 18 and $age < 60) {
            return true;
        } else {
            return false;
        }
    }

    // Метод для изменения возраста
    public function setAge($age) {
        if ($this -> isAgeCorrect($age)) {
            $this -> age = $age;
        }
    }

    // Метод для добавления возраста
    public function addAge($years) {
        $newAge = $this -> age + $years;

        if ($this -> isAgeCorrect($newAge)) {
            $this -> age = $newAge;
        }
    }

    // Метод для уменьшения возраста
    public function subAge($years) {
        $newAge = $this -> age - $years;

        if ($this -> isAgeCorrect($newAge)) {
            $this -> age = $newAge;
        }
    }
}