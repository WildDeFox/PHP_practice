<?php
session_start();

if(!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1; // первый заход на страницу
} else {
    $_SESSION['count']++; // последующие заходы
}

echo $_SESSION['count'];