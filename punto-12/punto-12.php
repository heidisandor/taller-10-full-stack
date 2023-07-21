<?php

/* Dado un número digitado por el usuario generar la tabla de multiplicar de del 0
 hasta el 30 (for) */

// Dar las variables
$num =0;

//Proceso
echo "Ingrese el número del que quiere saber su tabla de multiplicar:". "\n";
fscanf (STDIN, "%d", $num);

for ($i = 0; $i <=30; $i++){;
        echo $num . " x " . $i . " = " . $num*$i . "\n";
        
}


?>