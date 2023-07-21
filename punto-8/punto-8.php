<?php

/* Dado el tipo de afiliación y el número de personas digitados el usuario generar el valor 
de las entradas a la bolera teniendo en cuenta que si el tipo de afiliación  es ‘A’  tendrá 
un descuento del  30% del total si es tipo ‘B’ el 25%, si es tipo ‘C’ del 10% y 
si es tipo ‘D’ del 5%, el valor es de $25.000 por persona.*/

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

$memberUpper = strtoupper($membershipType);

switch ($memberUpper){
    case 'A':
        $totalPay= $totalPay -($totalPay*0.30);
        echo "has recibido un 30% de descuento". "\n";
        break;
        
    case 'B':
        $totalPay= $totalPay -($totalPay*0.25);
        echo "has recibido un 25% de descuento" . "\n";
        break;
        
    case 'C':
        $totalPay= $totalPay -($totalPay*0.10);
        echo "has recibido un 10% de descuento" . "\n";
        break;
    
    case 'D':
        $totalPay= $totalPay -($totalPay*0.05);
        echo "has recibido un 5% de descuento" . "\n";
        break;
        
    default: 
        echo "tu membresía no cuenta con descuentos" . "\n";
        break; 
}        
    
    echo "El valor a pagar es: " . $totalPay; 
         


?>