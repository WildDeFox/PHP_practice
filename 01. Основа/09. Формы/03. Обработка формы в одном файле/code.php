<form action="" method="post">
    <input type="text" name="name"> Введите ваше Имя.<br>
    <input type="text" name="surn"> Введите вашу Фамилию.<br>
    <input type="text" name="patron"> Введите ваше Отчество.<br>
    <input type="submit">
</form>

<?php
if (!empty($_POST)) {
    echo "$_POST[name] $_POST[surn] $_POST[patron]";
}