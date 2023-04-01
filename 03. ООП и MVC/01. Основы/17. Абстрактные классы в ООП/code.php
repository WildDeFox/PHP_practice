<?php
require_once 'Employee1.php';

$obj1 = new Employee();
$obj1 -> setName('Oleg');
$obj1 -> setSalary(20000);
echo $obj1 -> getName();
echo $obj1 -> getSalary();