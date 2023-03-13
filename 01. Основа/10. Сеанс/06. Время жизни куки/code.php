<?php
// Установите какую-нибудь куку на месяц
setcookie('test', 'Hello world', time() + 60 * 60 * 24 * 31);