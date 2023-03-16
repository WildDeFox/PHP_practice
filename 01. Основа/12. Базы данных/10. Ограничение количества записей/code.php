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

// Получите первых 4 юзера.
// $query = "SELECT * FROM users LIMIT 4";

// Получите юзеров со второго, 3 штуки.
// $query = "SELECT * FROM users WHERE id>1 LIMIT 3"

// Отсортируйте юзеров по возрастанию зарплаты и получите первых 3 работника из результата сортировки.
// $query = "SELECT * FROM users ORDER BY salary LIMIT 3";

// Отсортируйте юзеров по убыванию зарплаты и получите первых 3 юзера из результата сортировки.
// $query = "SELECT * FROM users ORDER BY salary DESC LIMIT 3";