<?php
if(!isset($_COOKIE['visited'])){
    setcookie("visited" , "yes");
    $str = "Cookie o nazwie visited nie jest ustawione";
} else {
    $str = "Cookie o nazwie visited jest ustawione.";
    $str .= "Jego wartosc to: {$_COOKIE['visited']}";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            echo$str
            ?>
    </div>
</body>
</html>