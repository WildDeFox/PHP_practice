<?php
// Сделайте класс Cart. Данный класс будет хранить список продуктов (объектов класса Product) в виде массива.
// Пусть продукты хранятся в свойстве products.
class Cart {
    private $products = [];

    // Реализуйте в классе Cart метод add для добавления продуктов.
    public function add($product) {
        $this -> products[] = $product;
    }

    public function get() {
        return $this -> products;
    }

    // Реализуйте в классе Cart метод getTotalCost, который будет находить суммарную стоимость продуктов.
    public function getTotalCost() {
        $sum = 0;
        foreach ($this -> products as $product) {
            $sum += $product -> getCoust();
        }
        return $sum;
    }

    // Реализуйте в классе Cart метод getTotalQuantity,
    // который будет находить суммарное количество продуктов (то есть сумму свойств quantity всех продуктов).
    public function getTotalQuantity() {
        $sumQuantity = 0;
        foreach ($this -> products as $product) {
            $sumQuantity += $product -> getQuantity();
        }
        return $sumQuantity;
    }

    // Реализуйте в классе Cart метод getAvgPrice, который будет
    // находить среднюю стоимость продуктов (суммарная стоимость делить на количество всех продуктов).
    public function getAvgPrice() {
        return $this -> getTotalCost() / $this -> getTotalQuantity();
    }
}