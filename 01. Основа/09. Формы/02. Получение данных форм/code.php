<?php
// Сделайте форму с тремя инпутами. Пусть в эти инпуты вводятся числа.
// После отправки формы выведите на экран сумму этих чисел.
?>
<form action="result.php" method="post">
    <input type="number" name="num1"> Введите первое число.<br>
    <input type="number" name="num2"> Введите второе число.<br>
    <input type="number" name="num3"> Введите третье число.<br>
    <hr>
    <input type="text" name="name"> Введите имя.<br>
    <input type="number" name="age"> Введите ваш возраст.<br>
    <input type="submit">
</form>
