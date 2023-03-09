<?php
// С помощью двух вложенных циклов найдите сумму элементов этого массива.
$arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
foreach ($arr as $sub) {
    foreach ($sub as $elem) {
        echo $elem . PHP_EOL;
    }
}

// С помощью трех вложенных циклов найдите сумму элементов этого массива.
$arr1 = [
    [
        [1, 2, 3],
        [6, 7, 8],
        [3, 8, 4],
        [6, 7, 9],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
        [5, 6, 3],
    ],
];

foreach ($arr1 as $sub) {
    foreach ($sub as $subSub) {
        foreach ($subSub as $elem) {
            echo $elem . PHP_EOL;
        }
    }
}
echo "<br>";

// Выведите элементы этого массива в формате ключ-значение.
$arr2 = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];
foreach ($arr2 as $key1 => $sub) {
    foreach ($sub as $key2 => $value) {
        echo $key2 . ' - ' . $value . '<br>';
    }
}

// С помощью двух вложенных циклов выведите элементы этого массива в формате имя группы - имя юзера.
$arr3 = [
    'group1'  => ['user11', 'user12', 'user13', 'user43'],
    'group2'  => ['user21', 'user22', 'user23'],
    'group3'  => ['user31', 'user32', 'user33'],
    'group4'  => ['user41', 'user42', 'user43'],
    'group5'  => ['user51', 'user52'],
];
foreach ($arr3 as $key1 => $sub) {
    echo $key1;
    foreach ($sub as $value) {
        echo ' - ' . $value . PHP_EOL;
    }
    echo '<br>';
}