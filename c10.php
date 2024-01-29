<?php
/*
Напишите сценарий PHP, который создает таблицу 10x10 
в которой на пересечении цифр 
по горизонтали и вертикали получается произведение этих цифр.
*/
    echo "<table border =\"1\" style='border-collapse: collapse'>";
    for ($row=1; $row <= 10; $row++) { 
        echo "<tr> \n";
        for ($col=1; $col <= 10; $col++) { 
            $p = $col * $row;
            echo "<td>$p</td> \n";
            }
        echo "</tr>";
        }
    echo "</table>";
?>