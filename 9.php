<?php
$url = 'https://wm-school.ru/php/php_exercises.php';
$url=parse_url($url);
echo 'Протокол: '.$url['scheme']."\n";
echo 'Хост: '.$url['host']."\n";
echo 'Путь: '.$url['path']."\n";
?>