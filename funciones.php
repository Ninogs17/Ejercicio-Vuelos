<?php 

include 'arrays.php';


#VUELO 

#FUNCION COMPAÑÍA
function compañia ($compañia, $selector){
    foreach ($compañia as $compa) {
        $compañiaa=$compa['Compañia'];
        $vuelo=$compa['Vuelo'];
        if ($vuelo==$selector){
            echo $compañiaa. "<br>";
}
    }

}

#FUNCION MEDIA PASAJEROS
function mpasajeros ($arrayNpasajeros, $selector){
    $n=0;
    $contador=0;
    foreach ($arrayNpasajeros as $pasajeros) {
        $vuelo=$pasajeros['Vuelo'];
        $pasajero=$pasajeros['Número de pasajeros'];
    
        if ($vuelo==$selector){
        $n=$n+$pasajero;
        $contador++;
        }
    }

echo "La media de pasajeros es: " .$n/$contador. "<br>";



}


?>