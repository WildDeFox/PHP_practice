<?php
require_once 'GetUser.php';

$user = new GetUser('Nikita', 24);
echo $user -> name;
echo $user -> age;
echo '<br>';
echo $user -> full;