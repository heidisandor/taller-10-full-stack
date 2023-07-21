<?php
/*Dada una contraseña a registrar por el usuario generar validaciones de si esta 
contraseña es segura o no teniendo en cuenta que una contraseña es segura si:
--> Tiene 8 o más Caracteres
--> Tiene al menos una letra mayúscula
--> Tiene al menos un número
*/

//Declaración de funciones
function hasLong($pass){
    return strlen ($pass) >=8;
}

function hasUpperLetter($pass){
    $arrayPass= str_split($pass);
    foreach($arrayPass as $letter){
        if ($letter==strtoupper($letter)){
            return true;
        }
    }
}

function hasNumber($pass){
    $arrayPass= str_split($pass);
    foreach($arrayPass as $letter){
        if (is_numeric($letter)){
            return true;
        }
    }
}


//Declarar Variables
$password= ""; 

echo "Ingrese la clave a registrar: \n";
fscanf(STDIN, "%s", $password); 

//PROCESO
if (hasLong ($password)) {
  if (hasUpperLetter($password)){
      if (hasNumber($password)){
          echo "¡Felicidades!Su contraseña es segura. Ha quedado registrada.";
        }else 
            echo "¡Cuidado! Su contraseña debe tener al menos un número. \n" ;
    }else {
         echo "¡Cuidado! Su contraseña debe tener al menos una mayúscula. \n" ;
        }
}else{
    echo "¡Cuidado! Su contraseña debe tener más de 8 caracteres. \n" ;
}


?>