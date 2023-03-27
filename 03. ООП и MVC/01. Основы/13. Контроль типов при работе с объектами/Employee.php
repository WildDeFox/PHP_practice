<?php
require_once 'Post.php';
// Сделайте класс Employee, в котором будут следующие свойства: name и surname.
// Пусть начальные значения этих свойств будут передаваться параметром в конструктор.
class Employee {
    private $name;
    private $surname;
    public $post;

    public function __construct($name, $surname,Post $post) {
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> post = $post;
    }

    // Сделайте геттеры и сеттеры для свойств name и surname.
    public function getName() {
        return $this -> name;
    }

    public function getSurname() {
        return $this -> surname;
    }

    public function setName($name) {
        $this -> name = $name;
    }

    public function setSurname($surname) {
        $this -> surname = $surname;
    }

    // Реализуйте в классе Employee метод changePost, который будет изменять должность
    // работника на другую. Метод должен принимать параметром объект класса Post.
    // Укажите в методе тип принимаемого параметра в явном виде.
    public function changePost(Post $post) {
        $this -> post = $post;
    }
}