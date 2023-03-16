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

// Достаньте всех юзеров и отсортируйте их по возрастанию зарплаты.
// $query = "SELECT * FROM users ORDER BY salary";

// Достаньте всех юзеров и отсортируйте их по убыванию зарплаты.
// $query = "SELECT * FROM users ORDER BY salary DESC";

// Достаньте всех юзеров и отсортируйте их по имени.
// $query = "SELECT * FROM users ORDER BY name";

// Достаньте юзеров с зарплатой 500 и отсортируйте их по возрасту.
// $query = "SELECT * FROM users WHERE salary=500 ORDER BY age";

// Достаньте всех юзеров и отсортируйте их по имени и по зарплате.
// $query ="SELECT * FROM users ORDER BY name, salary";
