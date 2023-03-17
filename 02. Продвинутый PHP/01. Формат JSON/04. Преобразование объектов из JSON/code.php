<?php
// Преобразуйте следующий JSON в структуру PHP:
$json = '{
		"user": {
			"name": "john",
			"surn": "smit"
		},
		"city": "London"
	}';
$data = json_decode($json);

// Выведите на экран имя, фамилию и город.
echo $data -> user -> name . '<br>';
echo $data -> user -> surn . '<br>';
echo $data -> city;