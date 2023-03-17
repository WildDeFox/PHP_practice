<?php session_start(); if (!empty($_SESSION['auth'])) : ?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>INfo</title>
    </head>
    <body>
    <p>Тут текст только для авторизованного пользователя</p>
    </body>
    </html>
<?php else: ?>
    <p>Пожалуйста <a href="code.php">авторизируйтесь</a></p>
<?php endif; ?><?php
