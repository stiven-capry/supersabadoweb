<?php

// Arreglos de una dimencion 
$precio=array("precio1"=>1600,"precio2"=>5000,"precio3"=>2500);
$nombres=array("arroz","salchichas","azucar");
$marca=array("diana","zenu","incauca");

// arreglos en multiples dimenciones
$productos=array(
    "producto1"=>array("nombre"=>"arroz","precio"=>1600,"marca"=>"diana"),
    "producto2"=>array("nombre"=>"salchicha","precio"=>5000,"marca"=>"zenu"),
    "producto3"=>array("nombre"=>"azucar","precio"=>2500,"marca"=>"incauca")
);

//nombre-precio-marca
print_r($productos);

echo("<br>");
echo("<br>");

foreach($productos as $valores){

    //print_r($valores);
    echo($valores["nombre"]);
    echo("<br>");

}

?>



