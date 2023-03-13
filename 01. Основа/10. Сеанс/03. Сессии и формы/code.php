<?php
// На одной странице с помощью формы спросите у пользователя фамилию, имя и возраст.
// Запишите эти данные в сессию. При заходе на другую страницу выведите эти данные на экран.
session_start();

//if (!empty($_GET)) {
//    $_SESSION['name'] = $_GET['name'];
//    $_SESSION['surn'] = $_GET['surn'];
//    $_SESSION['age'] = $_GET['age'];
//}

if (!empty($_GET)) {
    $_SESSION = $_GET;
}
?>
<form action="" method="get">
    <label for="name">
        Введите имя: <input type="text" name="name"><br>
        Введите фамилию: <input type="text" name="surn"><br>
        Введите возраст: <input type="number" name="age"><br>
    </label>
    <input type="submit"><br>
</form>
<a href="code2.php">Link</a>
