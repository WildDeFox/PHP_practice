<?php
session_start();
$_SESSION['auth'] = false;
header('Location: code.php');