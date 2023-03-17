<?php
session_start();

$_SESSION['flash'] = 'Все гуд';
header('Location: action.php');