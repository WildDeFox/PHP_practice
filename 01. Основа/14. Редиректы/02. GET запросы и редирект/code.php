<a href="action.php">Click me!</a>
<?php
if (isset($_GET['success'])) {
    if ($_GET['success'] == 1) {
        echo 'Все хорошо';
    } else {
        echo 'Все плохо';
    }
}