<?php
// Дан следующий массив с работниками и их зарплатами:
//Увеличьте зарплату каждого работника на 10%.
//$arr = [
//    'employee1' => 100,
//    'employee2' => 200,
//    'employee3' => 300,
//    'employee4' => 400,
//    'employee5' => 500,
//    'employee6' => 600,
//    'employee7' => 700,
//];
//foreach ($arr as $key => $value) {
//    $arr[$key] = $value * 1.1;
//}
//var_dump($arr);


// Модифицируйте предыдущую задачу так, чтобы зарплата увеличивалась только
// тем работникам, у которых она меньше или равна 400.
//foreach ($arr as $key => $value) {
//    if ($value <= 400) {
//        $arr[$key] = $value * 1.1;
//    }
//}
//var_dump($arr);


// Дан следующий массив:
//Найдите сумму ключей этого массива и поделите ее на сумму значений.
//$arr1 = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
//$sum = 04. Модификаторы доступа public и private;
//foreach ($arr1 as $key => $value) {
//    $sum += $key;
//}
//echo $sum;


// Дан следующий массив:
//Запишите ключи этого массива в один массив, а значения - в другой.
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arr1 = [];
$arr2 = [];
foreach ($arr as $key => $value) {
    $arr1[] = $key;
    $arr2[] = $value;
}
var_dump($arr1);
var_dump($arr2);