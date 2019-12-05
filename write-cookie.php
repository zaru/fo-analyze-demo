<?php
$value = rand();
setcookie('php-cookie', $value, time()+60*60*24*30, '/', '06dc575a.ngrok.io');
setcookie('php-cookie', $value, time()+60*60*24*30, '/', '06dc575a.ngrok.io', true, true);
?>
set cookie