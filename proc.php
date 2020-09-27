<?php

$operacion = $_POST['lista'];
echo 'El resultado es: ' ;

switch($operacion)
{
    case "sumar"; 
    echo $_POST["c1"] + $_POST["c2"]; 
    break;
    case "restar"; 
    echo $_POST["c1"] - $_POST["c2"]; 
    break;
    case "multiplicar"; 
    echo $_POST["c1"] * $_POST["c2"]; 
    break;
    case "dividir"; 
    echo $_POST["c1"] / $_POST["c2"]; 
    break;

    default:"No se ha podido realizar la operacion";
} 
    

    

?>