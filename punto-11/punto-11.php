<?php
// Sumar los números pares hasta el 100 (for)

// Dar las variables
$sum =0;

echo "Estos son los números pares de 0 a 100, que se sumarán:" . "\n"; 

for ($i = 0; $i <=100; $i++){;
    if ($i % 2==0){
        echo $i . " , ";
        $sum += $i; 
    }
}

echo "\n" . "El valor total de la sumatoria es: " . $sum . "\n";
?>