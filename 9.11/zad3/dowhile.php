<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wyswietlanie liczb podzielnych przeez 5</title>
</head>
<body>

<?php
$startNumber = 100;
$counter = 0;

do {
    $currentNumber = $startNumber - $counter * 5;
    echo $currentNumber . '<br>';
    $counter++;
} while ($counter < 5);
?>
    
</body>
</html>