<?php
/*
Напишите программу, которая будет считать символы "w" в тексте "www.wm-school.ru"
*/
$text="www.wm-school.ru";
$search_char="w";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count."\n";
?>