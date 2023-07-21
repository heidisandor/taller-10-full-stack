<?php
/* Generar la suma de dos números dentro de una constante y una variable y 
luego cambiar el valor de la variables para sumarlas de nuevo */

//constantes
const a = 3;

//variables
$b= 4;
$c= a + $b;

echo $c . "\n";


$b= 5;
$c= a + $b;

echo $c . "\n";

?>