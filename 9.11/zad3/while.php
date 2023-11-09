<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wyswietlanie liczb podzielnych przez 5</title>
</head>
<body>
    
<?php
    $startNumber = 100;
    $counter = 0;

    while ($counter <5) {
        $currentNumber = $startNumber - $counter * 5;
        echo $currentNumber . '<br>';
        $counter++;
    }
?>
    
</body>
</html>