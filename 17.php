<?php
$file = basename($_SERVER['PHP_SELF']); 
$no_of_lines = count(file($file)); 
echo "Имеется $no_of_lines строк в файле $file"."\n";
?>