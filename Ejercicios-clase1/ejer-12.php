<?php 

$lapiceras = array();
$lapicera1 = array('color' => "rojo", 'marca' => "bic", 'trazo' => "fino",'precio' => 100);
$lapicera2 = array('color' => "azul", 'marca' => "Parker", 'trazo' => "gruesa",'precio' => 150);
$lapicera3 = array('color' => "lila", 'marca' => "Visconti", 'trazo' => "fino",'precio' => 200);

array_push($lapiceras, $lapicera1);
array_push($lapiceras, $lapicera2);
array_push($lapiceras, $lapicera3);

foreach ($lapiceras as $lapicera) {

    echo "Color: " . $lapicera['color'] . "<br/>";
    echo "Marca: " . $lapicera['marca'] . "<br/>";
    echo "Trazo: " . $lapicera['trazo'] . "<br/>";
    echo "Precio: $" . $lapicera['precio'] . "<br/><br/>";
}
/*
Aplicación No 12 (Arrays asociativos)
Realizar las líneas de código necesarias 
para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras. */

?>
