<?php session_start(); if (!empty($_SESSION['auth'])): ?>
<!doctype html>
<html lang="re">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INFO</title>
</head>
<body>
<h3>Привет <?= $_SESSION['login'] ?></h3>
<p>Тут вы можете перейти на следующие страницы: </p>
<a href="1.php">Первая страница</a>
<a href="2.php">Вторая страница</a>
<a href="3.php">Третья страница</a>
<a href="logout.php">Выйти из аккаунта</a>
</body>
</html>
<?php else: ?>
<p>Это начальная страница. Её можно просмотреть только зарегестрированный пользователь.</p>
<p>Тут вы можете <a href="auth.php">авторизироваться</a></p>
<p>А тут <a href="register.php">зарегестрироваться</a></p>
<?php endif; ?>