<?php
if (isset($_COOKIE['username']))   {
    unset($_COOKIE['username']);
    setcookie('username', '', time() - 3600, '/');
    echo 'Plik cookie "username" zostal usunięty.';
} else {
echo 'Plik cookie "username" nie istnieje.';
}
?>