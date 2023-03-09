<?php
// Дана строка 'php'. Сделайте из нее строку 'PHP'.
echo strtoupper('php') . '<br>';

// Дана строка 'PHP'. Сделайте из нее строку 'php'.
echo strtolower('PHP') . '<br>';

// Дана строка 'london'. Сделайте из нее строку 'London'.
echo ucfirst('london') . '<br>';

// Дана строка 'London'. Сделайте из нее строку 'london'.
echo lcfirst('London') . '<br>';

// Дана строка 'london is the capital of great britain'.
// Сделайте из нее строку 'London Is The Capital Of Great Britain'.
echo ucwords('london is the capital of great britain') . '<br>';

// Дана строка 'LONDON'. Сделайте из нее строку 'London'.
echo ucfirst(strtolower('LONDON')) . '<br>';