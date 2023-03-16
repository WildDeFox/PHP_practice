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

// Выберите из таблицы users имя, возраст и зарплату для каждого работника.
// $query = "SELECT name, age, salary FROM users";

// Выберите из таблицы users имена всех работников.
// $query = "SELECT name FROM users";
