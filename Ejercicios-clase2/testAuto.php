<?php 

include 'ejer-21.php'; 


$auto1 = new Auto("Peugeot", "Verde", 1500, new DateTime("2022-02-15"));
$auto2 = new Auto("Fiat", "Azul", 2000, new DateTime("2023-07-03"));
$auto3 = new Auto("Peugeot", "Verde", 1000, new DateTime("2023-11-04"));
$auto4 = new Auto("Renault", "Gris", 1000, new DateTime("2023-09-04"));

$auto1->AgregarImpuestos(500);
$auto2->AgregarImpuestos(200);

Auto:: MostrarAuto($auto1);
Auto:: MostrarAuto($auto2);
Auto:: MostrarAuto($auto3);
Auto:: MostrarAuto($auto4);


$resultado = Auto:: Add($auto1, $auto3);
echo "<br>". "La suma entre el auto de la misma marca y color es: ". $resultado."<br>";

if ($auto1->Equals($auto2)) {
    echo "\nEl Auto 1 y el Auto 2 son de la misma marca.\n";
} else {
    echo "\nEl Auto 1 y el Auto 2 no son de la misma marca.\n";
}

?>