<?php
// Пусть при заходе на эту страницу выполняется редирект на страницу index.php.
// При редиректе передайте в GET параметре success значение 1.
header('Location: code.php?success=1');