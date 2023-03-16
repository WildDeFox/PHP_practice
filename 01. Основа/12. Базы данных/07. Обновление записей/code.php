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

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
    var_dump($data);
}
echo '<br>';

// Юзеру с id 4 поставьте возраст 35 лет.
// $query = "UPDATE users SET age=35 WHERE id=4";

// Всем, у кого зарплата 500, сделайте ее 700.
// $query = "UPDATE users SET salary=700 WHERE salary=500";

// Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.
// $query = "UPDATE users SET age=23 WHERE id>2 AND id<5";
