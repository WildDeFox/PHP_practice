<form action="" method="post">
    <input type="text" name="Name"> Введите имя <br>
    <input type="checkbox" name="flag">Привет?
    <input type="submit">
</form>

<?php
if (!empty($_POST)) {
    if (isset($_POST['flag'])) {
        echo "Приветик)";
    } else {
        echo "Ну как хочешь!";
    }
}