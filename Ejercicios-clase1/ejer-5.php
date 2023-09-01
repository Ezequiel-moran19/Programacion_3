<?php

if ($_POST) {

    $a = $_POST['txtA'];
    $b = $_POST['txtB'];
    $c = $_POST['txtC'];

    if (($a >= $b && $a <= $c) || ($a <= $b && $a >= $c)) 
    {
        echo "El valor del medio es: " . $a."<br>";
    } 
    elseif (($b >= $a && $b <= $c) || ($b <= $a && $b >= $c))
    {
        echo "El valor del medio es: " . $b."<br>";
    }
    elseif (($c >= $a && $c <= $b) || ($c <= $a && $c >= $b)) 
    {
        echo "El valor del medio es: " . $c."<br>";
    } 
    else 
    {
        echo "No hay valor del medio";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>

    <form action="ejer-5.php" method="post">
        A:
        <input type="text" name="txtA">
        <br> <br>
        B:
        <input type="text" name="txtB">
        <br> <br>
        C:
        <input type="text" name="txtC">
        <br> <br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>