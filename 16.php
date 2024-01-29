<?php
$current_file = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file); 
echo "Последнее изменение " . date("l, dS F, Y, h:ia", $file_last_modified)."\n";
?>