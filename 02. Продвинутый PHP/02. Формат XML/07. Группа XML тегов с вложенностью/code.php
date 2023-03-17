<?php
$xml = simplexml_load_file('test.xml');

// Выведите на экран название, категорию, цену и количество каждого продукта.
foreach ($xml -> product as $prod) {
    echo $prod -> name . '<br>';
    echo $prod -> category . '<br>';

    echo $prod['cost'] . '<br>';
    echo $prod['amount'] . '<br>';
}