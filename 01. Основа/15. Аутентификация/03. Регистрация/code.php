<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'reg';

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

if (!empty($_POST['login']) and !empty($_POST['password']) and !empty($_POST['confirm'])) {
    if ($_POST['password'] == $_POST['confirm']) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];
        $email = $_POST['email'];
        $date = $_POST['date'];

        $query = "SELECT * FROM users WHERE name='$login'";
        $user = mysqli_fetch_assoc(mysqli_query($link, $query));

        if (empty($user)) {
            $query = "INSERT INTO users SET name='$login', password='$password', email='$email', date='$date'";
            mysqli_query($link, $query);

            $_SESSION['auth'] = true;

            $id = mysqli_insert_id($link);
            $_SESSION['id'] = $id;
        } else {
            echo 'Логин уже занят!';
        }
    } else {
        echo 'Пароли не совпадают!';
    }

} else {
    echo 'Ошибка регестрации';
}