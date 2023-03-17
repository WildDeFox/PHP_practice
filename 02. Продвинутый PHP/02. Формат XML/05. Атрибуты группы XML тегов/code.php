<?php
$xml = simplexml_load_file('test.xml');
// Выведите на экран название, цену и количество каждого продукта.

foreach ($xml -> product as $prod) {
    echo $prod . '<br>';
    echo $prod['cost'] . '<br>';
    echo $prod['amount'] . '<br>';
}