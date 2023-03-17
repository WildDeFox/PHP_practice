<?php
// Преобразуйте следующий JSON в структуру PHP:
$json = '[
		"x",
		"y",
		"z"
	]';
$data = json_decode($json);
var_dump($data);