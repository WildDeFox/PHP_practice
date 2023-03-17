<meta charset="utf-8">
<form action="" method="POST">
    <label>
        Введите логин:
        <input type="text" name="login">
    </label>
    <label>
        Введите пароль:
        <input type="password" name="password">
    </label>
    <input type="submit">
</form>
<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'reg';

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE name='$login' AND password=$password";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    if (!empty($user)) {
        header('Location: form.php');
    } else {
        echo 'Неверно ввел логин или пароль';
    }
}