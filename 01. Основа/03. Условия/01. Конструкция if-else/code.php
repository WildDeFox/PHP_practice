<?php
// Проверьте то, что переменная $test больше 10.
// Проверьте то, что переменная $test больше или равна 10.
$test = 20;
$test1 = 10;
$test2 = 15;

if ($test >= 10) {
    echo '+++';
} else {
    echo "---";
}

// Проверьте то, что переменная $test меньше 10.
// Проверьте то, что переменная $test меньше или равна 10.
if ($test <= 10) {
    echo '+++';
} else {
    echo '---';
}

// Проверьте то, что переменная $test равна 10.
if ($test == 10) {
    echo '+++';
} else {
    echo '---';
}

// Проверьте то, что переменная $test не равна 10.
if ($test != 10) {
    echo '+++';
} else {
    echo '---';
}

// Даны переменные $test1 и $test2. Проверьте, что значение
// какой из этих переменных больше и выведите соответствующее сообщение на экран.
if ($test1 > $test2) {
    echo 'Переменная $test1 больше';
} else {
    echo 'Переменная $test2 больше';
}