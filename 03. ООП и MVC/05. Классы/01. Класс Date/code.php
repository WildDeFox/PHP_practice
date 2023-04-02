<?php
require_once 'Date.php';

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
echo $date->getYear() . '<br>';
echo $date->getMonth() . '<br>';
echo $date->getDay() . '<br>';

echo $date->getWeekDay() . '<br>';
echo $date->getWeekDay('ru') . '<br>';
echo $date->getWeekDay('en') . '<br>';