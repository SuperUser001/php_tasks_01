<?php
/*
3. Создание фигуры треугольника с использованием вложенного цикла for
Создайте сценарий для построения фигуры треугольника, используя вложенный цикл for.
*/

for($x=1;$x<=5;$x++){
   for ($y=1;$y<=$x;$y++){
	 echo "*";
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}
?>