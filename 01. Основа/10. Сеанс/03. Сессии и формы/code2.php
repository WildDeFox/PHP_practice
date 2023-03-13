<?php
session_start();
if (!empty($_SESSION)) {
    echo "$_SESSION[name] $_SESSION[surn], $_SESSION[age]";
}
