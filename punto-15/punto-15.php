<?php
/* Generar la operación de dos números digitados por el usuario 
pudiendo el usuario sumar, restar, multiplicar o dividir
USANDO FUNCIONES */

//Nombrar las funciones
function addNumber ($x, $y) {
    echo "El resultado de la suma es: \n" . $x + $y . "\n";
}

function substractNumber ($x, $y) {
    echo "El resultado de la resta es: \n" . $x - $y . "\n";
}

function divideNumber ($x, $y) {
    echo "El resultado de la división es: \n" . $x / $y . "\n";
}

function multiplyNumber ($x, $y) {
    echo "El resultado de la multiplicación es: \n" . $x * $y . "\n";
}

//Nombrar variables
$firstNumber=0;
$secondNumber=0;
$option=0;

//Proceso
echo "Ingrese el primer número a calcular: \n";
fscanf (STDIN, "%d", $firstNumber);

echo "Ingrese un segundo número a calcular \n";
fscanf (STDIN, "%d", $secondNumber);

echo "¿Qué operación desea realizar? \n". 
    "1--> suma \n".
    "2--> resta \n".
    "3--> multipplicación \n".
    "4--> división \n".
    "Ingrese una de las opciones presentadas anteriormente, para realizar la operación entre sus números: " . "\n";
fscanf (STDIN, "%d", $option);

switch ($option){
    case 1:
        addNumber ($firstNumber, $secondNumber);
        break;
        
    case 2:
        substractNumber ($firstNumber, $secondNumber);
        break;
        
    case 3:
        multiplyNumber ($firstNumber, $secondNumber);
        break;
    
    case 4:
        divideNumber ($firstNumber, $secondNumber);
        break;
        
    default: 
        echo "la opción digitada no es válida" . "\n";
        break; 
}        

?>