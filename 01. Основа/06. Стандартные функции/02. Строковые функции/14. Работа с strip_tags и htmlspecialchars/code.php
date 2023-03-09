<?php
// Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки.
echo strip_tags('html, <b>php</b>, js') . '<br>';

// Дана строка $str. Удалите все теги из этой строки, кроме тегов <b> и <i>.
$str = 'Hello <b>world!</b>. <div>How are you?</div> <i>I`m fine.</i>';
echo strip_tags($str, '<b>, <i>');

// Дана строка 'html, <b>php</b>, js'. Выведите ее на экран 'как есть':
// то есть браузер не должен преобразовать <b> в жирный.
echo htmlspecialchars('html, <b>php</b>, js');