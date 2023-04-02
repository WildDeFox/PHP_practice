<?php
require_once 'Date.php';
require_once 'C:\OSPanel\domains\PHP_Practice\03. ООП и MVC\05. Классы\02. Класс Interval\Inreval.php';

// $newDate = new Date;
// echo $newDate . '<br>';

// $newDate2 = new Date("2022-03-02");
// echo $newDate2 . '<br>';

// echo $newDate -> getDay() . '<br>';
// echo $newDate2 -> getMonth('ru') . '<br>';
// $newDate2 -> addMonth(2);
// echo $newDate2 -> getMonth('ru') . '<br>';
// echo $newDate -> getYear() . '<br>';
// echo $newDate -> getWeekDay('ru') . '<br>';
// $newDate -> addDay(3);
// echo $newDate -> getWeekDay('ru') . '<br>';
// $newDate -> subDay(2);
// echo $newDate -> getWeekDay('ru') . '<br>';
// $newDate -> addYear(3);
// echo $newDate; 

$date = new Date('2025-12-31');
$date2 = new Date('2022-12-31');
echo $date->getYear() . '<br>';
echo $date->getMonth() . '<br>';
echo $date->getDay() . '<br>';

echo $date->getWeekDay() . '<br>';
echo $date->getWeekDay('ru') . '<br>';
echo $date->getWeekDay('en') . '<br>';

$diff = new Interval($date, $date2);
$diff -> toDays();
$diff -> toMonth();
$diff -> toYear();