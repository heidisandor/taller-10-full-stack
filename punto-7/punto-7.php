<?php

/* Generar la operacion de dos números digitados por el usuario pudiendo 
del lusuario sumar, restas, multiplicar o dividir. */ 

//Declarar variables de entrada 
$numberA= 0;
$numberB= 0;
$operacion=0; 
$result=0;

//Proceso
echo "Ingrese un número para operar: ";
fscanf (STDIN, "%d", $numberA);

echo "Ingrese un segundo número para operar: ";
fscanf (STDIN, "%d", $numberB);

echo ">>Si desea sumar los números digite: 1 " . "\n" .
     ">>Si desea restar los números digite: 2 " . "\n" .
     ">>Si desea multiplicar los números digite: 3 " . "\n" .
     ">>Si desea dividir los números digite: 4 " . "\n".
     "Ingrese una opción para realizar una operación entre sus números: " . "\n";
fscanf (STDIN, "%d", $operacion);


switch ($operacion){
    case 1:
        $result= $numberA+$numberB;
        
        break;
        
    case 2:
        $result= $numberA-$numberB;
        break;
        
    case 3:
        $result= $numberA*$numberB;
        break;
    
    case 4:
        $result= $numberA/$numberB;
        break;
        
    default: 
        echo "la opción digitada no es válida" . "\n";
        break; 
}        
    
    echo "El resultado es: " . $result; 

?>