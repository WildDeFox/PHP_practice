<?php
// Адрес страницы для обращения:
$url = 'http://practice/02.%20Продвинутый%20PHP/03.%20Библиотека%20CURL/01.%20Библиотека%20CURL/test.loc';

// Инициализируем сеанс:
$curl = curl_init();

// Указываем адрес страницы
curl_setopt($curl, CURLOPT_URL, $url);

// Ответ сервера сохранять в переменную
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

// 	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

// Выполняем запрос:
$res = curl_exec($curl);

if ($res === false) {
    // Выведем ошибку
    echo curl_error($curl);
} else {
    var_dump($res);
}