<form action="" method="get">
    <label for="gen">
        Ваш пол: <br>
        <input type="radio" name="gen" value="1"> Мужской <br>
        <input type="radio" name="gen" value="2"> Женский <br>
    </label>
    <input type="submit">
</form>

<?php
if (!empty($_GET)) {
    echo $_GET['gen'];
}