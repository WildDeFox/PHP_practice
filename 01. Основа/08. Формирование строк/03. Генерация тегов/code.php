<?php
// Выведите каждую из этих переменных в отдельном абзаце.
$text1 = 'aaa';
$text2 = 'bbb';
$text3 = 'ccc';
echo "<p>$text1</p>";
echo "<p>$text2</p>";
echo "<p>$text3</p>";


// Сформируйте с помощью этих переменных три тега img.
$src1 = '1.png';
$src2 = '2.png';
$src3 = '3.png';
echo "<img src='$src1' alt='Картинка 1'>";
echo "<img src='$src2'>";
echo "<img src=\"$src1\">";