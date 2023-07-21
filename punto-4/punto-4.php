<?php
// Mostrar en consola el nombre y apellido ingresado por el usuario.

//Declarar variables de entrada 
$firstName = " ";
$lastName = " ";

//Proceso

echo "Ingrese el nombre: ";
fscanf(STDIN, "%s", $firstName);

echo "Ingrese el apellido: ";
fscanf(STDIN, "%s", $lastName);


echo "El nombre completo es: " . $firstName . " " . $lastName ;

?>