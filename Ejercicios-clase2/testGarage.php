<?php 

include 'ejer-21.php'; 
include 'ejer-22.php'; 
/*
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
*/
$auto1 = new Auto("Peugeot", "Verde", 1500, new DateTime("2022-02-15"));
$auto2 = new Auto("Fiat", "Azul", 2000, new DateTime("2023-07-03"));
$auto3 = new Auto("Peugeot", "Verde", 1000, new DateTime("2023-11-04"));

// Crear un objeto Garage
$miGarage = new Garage("Mi Garage", 15.0);

// Utilizar el método AgregarImpuestos en los autos
$auto1->AgregarImpuestos(1500);
$auto2->AgregarImpuestos(1500);
$auto3->AgregarImpuestos(1500);

// Obtener el importe sumado de dos autos
$importeDouble = Auto::Add($auto1, $auto3);
echo "La suma entre el primer y segundo auto es: $importeDouble<br>";

// Comparar autos
if ($auto1->Equals($auto2)) {
    echo "El Auto 1 y el Auto 2 son de la misma marca.<br>";
} else {
    echo "El Auto 1 y el Auto 2 no son de la misma marca.<br>";
}

// Agregar autos al Garage
$miGarage->Add($auto1);
$miGarage->Add($auto2);
$miGarage->Add($auto3);

// Mostrar información del Garage
$miGarage->MostrarGarage();

$miGarage->Remove($auto1);

$miGarage->MostrarGarage();


?>