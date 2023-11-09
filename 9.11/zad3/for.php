<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wyswietlanie liczb podzielnych przeez 5</title>
</head>
<body>

<?php
    $startNumber = 100;
    
    for ($i = 0; $i < 5; $i++) {
        $currentNumber = $startNumber - $i * 5;
        echo $currentNumber . '<br';
    }
?>
    
</body>
</html>