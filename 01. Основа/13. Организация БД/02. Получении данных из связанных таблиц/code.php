<meta charset="utf-8">
<?php
$host = 'localhost'; // имя хоста
$user = 'root'; // имя пользователя
$pass = ''; // пароль
$name = 'mydb'; // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT users.name, cities.name as city_name FROM users LEFT JOIN cities ON cities.id=users.city_id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

// С помощью описанного цикла получите и выведите через var_dump на экран массив всех работников.
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
    var_dump($data);
}
