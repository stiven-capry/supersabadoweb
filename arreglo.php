<?php
// Arreglo  indexado
$productos=array("lentejas","papa","huevos");
print_r($productos);
echo("<br>");
echo($productos[1]);

//arreglo asosiativo
echo("<br>");
echo("<br>");
$productosAsociativos=array("producto1"=>"lentejas","producto2"=>"papa","producto3"=>"huevos");
print_r($productosAsociativos);
echo("<br>");
echo($productosAsociativos["producto2"]);

// bucle for 
echo("<br>");
echo("<br>");
for($centinela=0; $centinela<count($productos); $centinela++){

    //echo($productosAsociativos[$centinela]); genera error
    echo($productos[$centinela]);
    echo("<br>");
}

echo("<br>");
echo("<br>");
foreach($productos as $clave=>$valor){
    echo($clave. " -- ". $valor."<br>");     
}



?>