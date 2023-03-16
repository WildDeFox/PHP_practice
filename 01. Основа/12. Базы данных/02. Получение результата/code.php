<meta charset="utf-8">
<?php
$host = 'localhost'; // имя хоста
$user = 'root'; // имя пользователя
$pass = ''; // пароль
$name = 'mydb'; // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

$query = 'SELECT * FROM users';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

// С помощью описанного цикла получите и выведите через var_dump на экран массив всех работников.
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
    var_dump($data);
}
echo '<br>';

// Из полученного результата получите первого работника. Через echo выведите на экран его имя.
echo $data[0]['name'] . '<br>';

// Из полученного результата получите второго работника. Через echo выведите на экран его имя и возраст.
echo $data[1]['name'] . ' - ' . $data[1]['age'] . '<br>';

// Из полученного результата получите третьего работника. Через echo выведите на экран его имя, возраст и зарплату.
echo $data[2]['name'] . ' - ' . $data[2]['age'] . ' - ' . $data[3]['salary'] . '<br>';