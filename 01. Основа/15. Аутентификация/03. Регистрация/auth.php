<?php session_start(); ?>
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

    $query = "SELECT * FROM users WHERE name='$login'";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    if (!empty($user)) {
        $hash = $user['password']; // соленый пароль из БД

        // Проверяем соответствие хеша из базы введеному паролю
        if (password_verify($_POST['password'], $hash)) {
            $_SESSION['auth'] = true;
            $_SESSION['login'] = $login;
            header('Location: main.php');
        } else {
            echo 'Пароли не совпадают';
        }

    } else {
        echo 'Не гуд';
    }
}