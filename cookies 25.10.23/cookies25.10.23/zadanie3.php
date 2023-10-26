<?php
$newUsername = "Username";
setcookie("username" , $newUsername, time() + 3600, "/");
echo "Wartosc pliku cookie 'username' zostala zmieniona na : " . $newUsername;
?>