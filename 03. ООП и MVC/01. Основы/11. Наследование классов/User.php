<?php
class User {
    protected $name;
    private $age;

    public function __construct($name, $age) {
        $this -> name = $name;
        $this -> age = $age;
    }
    public function getName() {
        return $this -> name;
    }

    public function getAge() {
        return $this -> age;
    }

    // Модифицируйте код класса User так, чтобы в методе setName выполнялась
    // проверка того, что длина имени более 3-х символов.
    public function setName($name) {
        if (count($name) > 3) {
            $this -> name = $name;
        }
    }

    public function setAge($age) {
        $this -> age = $age;
    }
}