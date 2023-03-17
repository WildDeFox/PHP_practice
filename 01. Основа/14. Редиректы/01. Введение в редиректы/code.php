<?php
// При заходе на страницу index.php выполните редирект на страницу page.php.
$addr = 'page.php';
header('Location: ' . $addr);