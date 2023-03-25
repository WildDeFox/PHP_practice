<?php
require_once 'Employee.php';

$emp1 = new Employee('emp1', 24);
echo $emp1 -> getName();
echo $emp1 -> getSalary();