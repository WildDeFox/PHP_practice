<form action="" method="post">
    <textarea name="text"><?= $_POST['text'] ?? ''?></textarea>
    <input type="submit">
</form>

<?php
if (!empty($_POST)) {
    echo $_POST['text'];
}
