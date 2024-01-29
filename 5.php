<!DOCTYPE html>
<html>
<head>
   <title></title>
   </head>
   <body>
   <form method='POST'>
   <h2>Введите имя:</h2>
 <input type="text" name="name">
 <input type="submit" value="Отправить">
 </form>
<?php
//Получить имя из строки запроса и сохранить в локальной переменной
$name = $_POST['name'];
echo "<h3> Привет $name </h3>";
?>
</body>
</html>