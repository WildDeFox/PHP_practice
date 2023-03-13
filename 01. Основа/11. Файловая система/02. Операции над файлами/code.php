<?php
// Переименовывание
rename('text.txt', 'new.txt');

// Перемещение
rename('new.txt', 'dir/new.txt');

// Копирование
copy('text1.txt', 'dir/copy.txt');

// Удаление
unlink('dir/new.txt');