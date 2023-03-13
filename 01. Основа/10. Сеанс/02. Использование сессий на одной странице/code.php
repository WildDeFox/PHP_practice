<?php
session_start();

if ($_SESSION['count'] === 10) {
    unset($_SESSION['count']);
}

if(!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1; // первый заход на страницу
} else {
    $_SESSION['count']++; // последующие заходы
}

// Модифицируйте этот код так, чтобы при достижении счетчиком значения 10, отсчет начинался сначала.


echo $_SESSION['count'];