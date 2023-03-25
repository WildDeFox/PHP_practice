<?php
require_once 'City.php';

$citys = [
    new City('city1', 2000),
    new City('city2', 3000),
    new City('city3', 4000),
    new City('city4', 5000),
    new City('city5', 6000)
];

foreach ($citys as $city) {
    echo $city -> name . ' - ' . $city -> population . '<br>';
}