<?php
// Создайте временный файл во временном 
// каталоге файлов с помощью sys_get_temp_dir()
$temp_file = tempnam(sys_get_temp_dir(), 'Temp');
echo $temp_file."\n";
?>