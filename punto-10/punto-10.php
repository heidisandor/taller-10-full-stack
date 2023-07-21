<?php
// Generar un programa que muestre los números pares del 1 al 100 (while)

// Dar las variables:
$number= 0;
$x=0; 

//Proceso:
while ($x <= 100){
    
    $number = $x % 2;
    
    if ($number==0){
    echo $x . "\n";
    }
    
    $x++;
}

?>