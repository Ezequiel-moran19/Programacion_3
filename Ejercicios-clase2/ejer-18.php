<?php 

function EsPar($numero){
    if ($numero % 2 == 0) {
        echo "Es par: ";
        return true;
    }else {
        echo "Es impar: ";
        return false;
    }
}

$num = EsPar(42);
echo $num;

?>