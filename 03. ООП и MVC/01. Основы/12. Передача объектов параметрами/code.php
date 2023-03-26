<?php
require_once 'Product.php';
require_once 'Cart.php';

$cart = new Cart();
$cart -> add(new Product('name1', 1000, 2));
$cart -> add(new Product('name2', 2000, 3));
var_dump($cart -> get());
echo '<br>';
echo $cart -> getTotalCost();
echo '<br>';
echo $cart -> getTotalQuantity();