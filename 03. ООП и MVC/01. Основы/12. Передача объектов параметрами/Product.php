<?php
class Product {
    // Сделайте класс Product, в котором будут приватные свойства name, price и quantity.
    // Пусть все эти свойства будут доступны только для чтения.
    protected $name;
    private $price;
    private $quantity;

    public function __construct($name, $price, $quantity) {
        $this -> name = $name;
        $this -> price = $price;
        $this -> quantity = $quantity;
    }

    // Добавьте в класс Product метод getCost, который будет находить
    // полную стоимость продукта (сумма умножить на количество).

    public function getCoust() {
        return $this -> price * $this -> quantity;
    }

    public function getName() {
        return $this -> name;
    }

    public function getPrice() {
        return $this -> price;
    }

    public function getQuantity() {
        return $this -> quantity;
    }

}