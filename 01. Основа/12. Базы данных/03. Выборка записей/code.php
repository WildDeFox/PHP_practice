<meta charset="utf-8">
<?php
$host = 'localhost'; // имя хоста
$user = 'root'; // имя пользователя
$pass = ''; // пароль
$name = 'mydb'; // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
    var_dump($data);
}
echo '<br>';

// Выберите юзера с id, равным 3.
// $query = "SELECT * FROM users WHERE id=3";

// Выберите юзеров с зарплатой 900.
// $query = "SELECT * FROM users WHERE salary=500";

// Выберите юзеров в возрасте 23 года.
// $query = "SELECT * FROM users WHERE age=23";

// Выберите юзеров с зарплатой более 400.
// $query = "SELECT * FROM users WHERE salary>400";

// Выберите юзеров с зарплатой равной или большей 500.
// $query = "SELECT * FROM users WHERE salary>=500";

// Выберите юзеров с зарплатой НЕ равной 500.
// $query = "SELECT * FROM users WHERE salary!=500"