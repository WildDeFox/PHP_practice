<?php
class Student {
    private string $name;
    private int $course;

    public function __construct($name) {
        $this -> name = $name;
        $this -> course = 1;
    }

    public function getName() {
        return $this -> name;
    }

    public function getCourse() {
        return $this -> course;
    }

    public function setName($name) {
        $this -> name = $name;
    }

    public function transferToNextCourse() {
        if ($this->isCourseCorrect($this -> course)) {
            $this -> course++;
        }
    }

    private function isCourseCorrect($course) {
        if ($course < 5) {
            return true;
        } else {
            return false;
        }
    }
}