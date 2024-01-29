<?php
if (!empty($_SERVER['HTTPS'])) 
{
  echo 'https включён';
}
else
{
echo 'http включён'."\n";
}
?>