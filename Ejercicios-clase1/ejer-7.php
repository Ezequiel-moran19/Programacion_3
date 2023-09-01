<?php 
 
$fecha = date( "d/m/Y");

echo "fecha  actual ". $fecha. "<br>";

$fecha = date("m");

switch ($fecha) {
    case 12:
    case 1:
    case 2:
    case 3:
         echo "Verano";
        break;
    case 4:
    case 5:
    case 6:
        echo "Otoño";
        break;
    case 7:
    case 8:
    case 9:
        echo "Invierno";
        break;

    default:
        echo "Primavera";
        break;
}

?>