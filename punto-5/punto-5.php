<?php
/* Dado el tipo de afiliación y el número de personas digitados por el usuario 
generar el valor de las entradas a la bolera teniendo en cuenta que si el tipo de 
afiliación es 'A' o 'B' tendrá un descuento del 30% del total y el valor es de $25000 
por persona */ 

//constante
const ticket= 25000;

//Declarar variables de entrada 

$membershipType= " ";
$personNumber= 0;

//Proceso

echo "Ingrese tipo de afiliación: ";
fscanf (STDIN, "%s", $membershipType);

echo "Ingrese cantidad de personas: ";
fscanf (STDIN, "%d", $personNumber);

$totalPay = $personNumber * ticket; 

if ($membershipType == "A"  ||$membershipType ==  "B") {
    $totalPay = $totalPay * 0.7;    
} else {
    echo "No cuenta con una afiliación que le de descuento" . "\n";
}

echo "El valor que debe pagar es: " . $totalPay . "\n";

?>