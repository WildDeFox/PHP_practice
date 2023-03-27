<?php
require_once 'Post.php';
require_once 'Employee.php';
// Создайте несколько объектов класса Post: программист, менеджер водитель.
$post1 = new Post('Программист', 10000);
$post2 = new Post('Менеджер', 1000);
$post3 = new Post('Водитель', 500);

$emp1 = new Employee('Nikita', 'Kapurin', $post1);

echo $emp1 -> getName();
echo $emp1 -> post -> getSalary();
echo $emp1 -> getSurname();
echo '<br>';
$emp1 -> changePost($post2);
echo $emp1 -> post ->getSalary();