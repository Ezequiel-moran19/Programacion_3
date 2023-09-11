<?php 

function mostrar_Potencia($numero){
    for ($i=1; $i <= 4 ; $i++) { 
        
        $resultado = pow($numero, $i);
        echo "$numero^$i = $resultado". "<br>";
  }
  echo "<br>";
}

for ($i=1; $i <= 4 ; $i++) { 
    mostrar_Potencia($i);
}



?>