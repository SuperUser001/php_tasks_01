<?php 
if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
echo 'У меня версия PHP как минимум 7.0.0, моя версия: ' . PHP_VERSION . "\n";
}
if (version_compare(PHP_VERSION, '7.1.0') >= 0) {
echo 'У меня версия PHP не ниже 7.1.0, моя версия: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
echo 'Я использую PHP 7, моя версия: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '7.0.0', '<')) {
echo 'Я использую PHP 6, моя версия: ' . PHP_VERSION . "\n";
}
?>