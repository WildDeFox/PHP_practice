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

// Выберите юзеров в возрасте от 25 (не включительно) до 28 лет (включительно).
// $query = "SELECT * FROM users WHERE age>25 AND age<=28";

// Выберите юзера user1.
// $query = "SELECT * FROM users WHERE name='user1'";

// Выберите юзеров user1 и user2.
// $query = "SELECT * FROM users WHERE name='user1' AND name='user2'";

// Выберите всех, кроме юзера user3.
// $query = "SELECT * FROM users WHERE name!='user3'";

// Выберите всех юзеров в возрасте 27 лет или с зарплатой 1000.
// $query = "SELECT * FROM users WHERE age=27 OR salary=1000";

// Выберите всех юзеров в возрасте 27 лет или с зарплатой не равной 400.
// $query = "SELECT * FROM users WHERE age=27 OR salary!=400";