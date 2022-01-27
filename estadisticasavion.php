<?php 

include 'funciones.php';


#Recogida de datos
$selector=$_POST["operando"];

mpasajeros ($arrayNpasajeros, $selector);

fabr($arrayFabrAvion, $selector);

mintot($arrayDViaje,$selector);

pastot($arrayNpasajeros,$selector);

mhoras ($arrayDViaje, $selector);

dest($arrayDestino,$selector);
?>