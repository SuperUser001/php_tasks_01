<?php 
// передавать действительные / недействительные электронные адреса
$email = "mail@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
     echo '"' . $email . '" = Валидный'."\n";
}
else 
{
     echo '"' . $email . '" = Невалидный'."\n";
}
?>