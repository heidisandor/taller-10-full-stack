<?php

// Dado un arreglo numérico de 5 posiciones generar la suma de los numeros (for)

// Dar las variables
$arrayNumbers = array(4, 2, 1, 1, 1);
$sum=0; 

echo "Esta es una suma de arreglos numéricos, usando el ciclo for" ."\n"; 

for ($i = 0; $i < count($arrayNumbers); $i++) {
        
        echo $arrayNumbers [$i] . "\n";
        $sum+= $arrayNumbers[$i];
        
        
}

echo "La suma de los números es: " . $sum  . "\n";
echo "\n"."Esta es una suma de arreglos numéricos, usando el ciclo foreach" ."\n"; 

$sum=0; 

foreach( $arrayNumbers as $number) {
    echo $number . "\n";
    $sum+= $number; 
}

echo "la suma del array con el ciclo foreach es: ". $sum . "\n";


?>