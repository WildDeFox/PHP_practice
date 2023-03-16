<meta charset="utf-8">
<?php
$host = 'localhost'; // имя хоста
$user = 'root'; // имя пользователя
$pass = ''; // пароль
$name = 'mydb'; // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

// Добавьте нового юзера 'user7', 26 лет, зарплата 300.
$query = "INSERT INTO users (name, age, salary) VALUES ('user7', 27, 300)";
$result = mysqli_query($link, $query) or die(mysqli_error($link));


echo '<br>';
