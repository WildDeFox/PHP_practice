<?php
// 	for ($i = 1; $i <= 10; $i++) {
//		for ($j = 1; $j <= 10; $j++) {
//			echo 'nums: ' . $i . ' ' . $j . '<br>';
//		}
//	}
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "nums: $i $j <br>";
    }
}

// 	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
//
//	foreach ($arr as $key => $elem) {
//		echo 'pair: ' . $elem . ' ' . $key . '<br>';
//	}
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
foreach ($arr as $key => $elem) {
    echo "pair: $elem $key <br>";
}
