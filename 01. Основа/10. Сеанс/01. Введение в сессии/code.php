<?php
session_start();
$_SESSION['num1'] = '5';
$_SESSION['num2'] = '5';
echo "Session";
?>
<a href="code.php">link</a>
<a href="code2.php">link2</a>