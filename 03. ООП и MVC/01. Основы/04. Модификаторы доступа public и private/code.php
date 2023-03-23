<?php
class User {
    public $name;
    public $age;

    public function setAge($age) {
        if ($this -> isAgeCorrect($age)) {
            $this -> age = $age;
        }
    }

    public function addAge($years) {
        $newAge = $this -> age + $years;

        if ($this -> isAgeCorrect($newAge)) {
            $this -> age = $newAge;
        }
    }

    private function isAgeCorrect($age) {
        if ($age > 18 and $age < 60) {
            return true;
        } else {
            return false;
        }
    }
}

// Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).
class Student {
    public $name;
    public $course;

    // В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.
    public function transferToNextCourse($cours) {
        if ($this->isCourseCorrect($cours)) {
            $this -> course = $cours;
        }
    }

    // Вынесите проверку курса в отдельный private метод isCourseCorrect.

    private function isCourseCorrect($cours) {
        if ($cours < 5) {
            return true;
        } else {
            return false;
        }
}
}