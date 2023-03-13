<form action="" method="get">
    <label for="test">Выберите вашу страну: <br>
        <select name="test">
            <option value="1" <?php
            if (!empty($_GET['test']) and $_GET['test'] === '1') {
                echo 'selected';
            }
            ?>>Россия</option>
            <option value="2" <?php
            if (!empty($_GET['test']) and $_GET['test'] === '2') {
                echo 'selected';
            }
            ?>>Германия</option>
            <option value="3" <?php
            if (!empty($_GET['test']) and $_GET['test'] === '3') {
                echo 'selected';
            }
            ?>>Америка</option>
        </select>
    </label>
    <input type="submit">
</form>

<?php
if (!empty($_GET)) {
    echo $_GET['test'];
}