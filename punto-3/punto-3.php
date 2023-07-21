<?php
// Generar la suma de dos números ingresados por el usuario.

//Declarar variables de entrada 
$firstNumber = 0;
$SecondNumber = 0;

//Proceso
echo "Ingrese el primer número a sumar: ";
fscanf(STDIN, "%d", $firstNumber);

echo "Ingrese el segundo número a sumar: ";
fscanf(STDIN, "%d", $secondNumber);

$sum = $firstNumber+$secondNumber;

echo "La suma resultante es: " . $sum ;

?>