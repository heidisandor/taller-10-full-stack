<?php
/* Dado un número digitado por el usuario generar la tabla de multiplicar 
desde el 0 hasta el 30 (while)*/

// Dar las variables
$number= 0;

//Proceso
echo "Ingrese el número que desee: ";
fscanf(STDIN, "%d", $number);

$x=0; 

while ($x <= 30){
    //salida
    echo $number. " x " . "$x" . " = ". $x*$number . "\n";
    
    $x++;
}

?>