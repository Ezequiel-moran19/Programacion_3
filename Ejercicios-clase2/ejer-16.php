<?php 

function inverti_Array($miArrary){

    $invertido = array_reverse($miArrary);

    return implode('', $invertido);
}

$palabra = "HOLA";
$caracteres = str_split($palabra);
$palabraInvertida = inverti_Array($caracteres);

echo "Palabra original: ".$palabra. "<br>";

echo "Palabra original: ".$palabraInvertida. "<br>";

?>