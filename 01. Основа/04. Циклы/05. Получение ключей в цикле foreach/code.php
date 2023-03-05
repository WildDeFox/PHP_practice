<?php
// С помощью цикла foreach выведите на экран столбец ключей и элементов в формате green - зеленый.
$arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];
foreach ($arr as $key => $value) {
    echo $key . ' - ' . $value . '<br>';
}

// С помощью цикла foreach выведите на экран столбец строк такого формата: user1 - возраст 30 лет.
$arr1 = ['user1' => 30, 'user2' => 32, 'user3' => 33];
foreach ($arr1 as $key => $value) {
    echo $key . ' - возраст ' . $value . ' лет' . '<br>';
}