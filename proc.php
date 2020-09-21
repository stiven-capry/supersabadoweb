<?php

$operacion = $_POST['listaoperadores'];
echo "El resultado es: " ;

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
}

?>