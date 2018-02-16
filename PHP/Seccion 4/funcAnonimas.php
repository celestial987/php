<?php

// Funcion 1
// una funcion anonima que se le pasa un argumento y lo multiplica por 2
$duplicar = function($variable){
    return $variable * 2;
};

//funcion 2
/* creamos una funcion a la que se le pasaran 2 argumentos $el_array y $la_funcion y esta hara;
crear un nuevo array $nuevo_array, recorre el array que se le pasa, y agrega al nuevo array el segundo 
parametro en la posicion $i; que lo que hace es llamar a la otra funcion pasandole el paramentro */
function modificar_array($el_array, $la_funcion){
    $nuevo_array = [];
    foreach($el_array as $elemento){
        $nuevo_array[] = $la_funcion($elemento);
    }
    return $nuevo_array;
}

$otro_array = modificar_array(range(1,10), $duplicar);// crear el nuevo array con los elementos del array multiplicados


?>