<?php
$all_lines = file('https://wm-school.ru/');
foreach ($all_lines as $line_num => $line)
 {
  echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
 }
?> 