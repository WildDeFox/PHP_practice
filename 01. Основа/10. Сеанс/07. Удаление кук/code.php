<?php
if (isset($_COOKIE['test'])) {
    setcookie('test', '', time());
    unset($_COOKIE['test']);
}

var_dump($_COOKIE['test']);