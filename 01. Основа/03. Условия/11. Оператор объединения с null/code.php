<?php
// Перепишите следующий код через изученный оператор:
//
//<?php
//	$user = ['name' => 'john', 'age' => 30];
//
//	if (isset($user['name'])) {
//		$name = $user['name'];
//	} else {
//		$name = 'unknown';
//	}
//
$user = ['name' => 'john', 'age' => 30];
$name = $user['name'] ?? 'unknown';

// Перепишите следующий код через изученный оператор:
//
//<?php
//	if (isset($user['name'])) {
//		$result = $user['name'];
//	} elseif (isset($user['surname'])) {
//		$result = $user['surname'];
//	} else {
//		$result = '';
//	}
//

$name1 = $user['name'] ?? $user['surname'] ?? '';
