<?php
require_once 'SetUser.php';

$user = new SetUser;
$user -> name = 'Nikita';
$user -> age = 24;
echo $user -> name . ' ';
echo $user -> age;