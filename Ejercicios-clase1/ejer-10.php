<?php 

$vecimpar = array();

for ($i=1; count($vecimpar) < 10; $i++) { 
    if ($i % 2 != 0) {
        $vecimpar[] = $i;
    } 
}

echo "Usando bucle for: <br>";

for ($i=0; $i < count($vecimpar); $i++) { 
    echo $vecimpar[$i]."<br>";
} 

echo "Usando bucle foreach:<br/>";
foreach ($vecimpar as $numero) {
    echo $numero . "<br>";
}


?>