<?php
// Дана строка $str. Вырежьте из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.
$str = 'dfasdfasdvdsf';
echo substr_replace($str, '!!!', 2, 5);