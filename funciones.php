<?php 

include 'arrays.php';


#VUELO 

#FUNCION COMPAÑÍA
function compañia($compañia, $selector){
    foreach ($compañia as $compa) {
        $compañiaa=$compa['Compañia'];
        $vuelo=$compa['Vuelo'];
        if ($vuelo==$selector){
            echo "La compañía es:" .$compañiaa. "<br>";
        }
    }

}


#FUNCION MEDIA PASAJEROS
function mpasajeros($arrayNpasajeros, $selector){
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


#FUNCIÓN ÚLTIMOS DESTINOS
function ultdes($arrayDestino,$selector){
    echo "Los ultimos destinos son: ";
    foreach ($arrayDestino as $ultdes) {
           $destino=$ultdes["Destino"];
           $vuelo=$ultdes["Vuelo"];
           if ($vuelo==$selector) {
              echo $destino.", ";
            }
    }
    echo "<br>";
 }

 


#FUNCIÓN FABRICANTE
function fabr($arrayFabrAvion, $selector){
    foreach ($arrayFabrAvion as $fabri) {
    $fabricante=$fabri["Fabricante del avión"];
    $vuelo=$fabri["Vuelo"];
    if ($vuelo==$selector){
       echo "El fabricante es: ". $fabricante."<br>";
     }
    }
}


#FUNCIÓN MINUTOS TOTALES DE VUELO
function mintot($arrayDViaje,$selector){
    
    $n=0;
    foreach ($arrayDViaje as $duracion) {
        $duracion1=$duracion["Duración viaje"];
        $vuelo=$duracion["Vuelo"];
        if ($vuelo==$selector) {
            $n=$n+$duracion1;
        }
    }
    echo "Minutos totales: ". $n."<br>";
}



#ESTADÍSTICAS DEL AVIÓN

#FUNCIÓN DESTINOS AVIÓN
function dest($arrayDestino,$selector){
    echo "Los destinos son: ";
    foreach ($arrayDestino as $destinos) {
           $destino=$destinos["Destino"];
           $vuelo=$destinos["Vuelo"];
           if ($vuelo==$selector) {
              echo $destino.", ";
            }
    }
    echo "<br>";
 }


#FUNCIÓN MEDIA DE HORAS
function mhoras ($arrayDViaje, $selector){
    $n=0;
    $contador=0;
    foreach ($arrayDViaje as $duracion) {
        $vuelo=$duracion['Vuelo'];
        $duracion1=$duracion['Duración viaje'];

        if ($vuelo==$selector){
        $n=$n+$duracion1;
        $contador++;
        }
    }
$n=$n/$contador;
$n=$n/60;
echo "La media de horas es: " .$n/$contador. "<br>";
}


#FUNCIÓN PASAJEROS TOTALES
function pastot($arrayNpasajeros,$selector){
    
    $n=0;
    foreach ($arrayNpasajeros as $ptotal) {
        $total=$ptotal["Número de pasajeros"];
        $vuelo=$ptotal["Vuelo"];
        if ($vuelo==$selector) {
            $n=$n+$total;
        }
    }
    echo "Número de Pasajeros totales: ". $n."<br>";
}










?>