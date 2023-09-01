<?php 

$vec = array();

for ($i=0; $i < 5; $i++) { 
    $vec[$i] = rand(1, 10);
}
//print_r($vec);

$promedio = array_sum($vec) / count($vec);

echo "Promedio: ". $promedio."<br>";

if ($promedio > 6) {
    echo "El promedio es mayor a 6";
}elseif ($promedio < 6) {
    echo "El promedio es menor a 6";
}else{
    echo "El promedio es igual a 6";
}
 
 


?>