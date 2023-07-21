<?php
/* Dado el nombre y la edad del usuario, generar un mensaje que incluya el nombre 
del usuario e indique si es mayor de edad o no. */

//Declarar variables de entrada 
$firstName= " ";
$lastName= " ";
$age= " ";

//Proceso

echo "Ingrese su nombre: ";
fscanf (STDIN, "%s", $firstName);

echo "Ingrese su apellido: ";
fscanf (STDIN, "%s", $lastName);

echo "Ingrese su edad: ";
fscanf (STDIN, "%d", $age);

echo "su nombre es: " . $firstName . " " . $lastName . "\n";

if ($age >= 18 ) {
    echo "Usted es mayor de edad. ";
} else {
    echo "Usted no es mayor de edad" . "\n";
}


?>