<?php
// actividad 1
    // Conversion de celcius a fahrenheit con la furmula 1.8 * C +32
    $celsius = 30;
    $fahrenheit = 1.8 * $celsius +32;
    echo $celsius ." ºC equivalen a: ". $fahrenheit . " ºF </br>";

// actividad 2
    // Contenga 2 variables boolean y nos indique cuando solo una de ellas es true
    $var1 = TRUE;
    $var2 = TRUE;
    //0 = false and 1 = true
    if ($var1 == 0 && $var2 == 1  || $var1 == 1 && $var2 == 0 ){
        echo "una de las variables es TRUE</br>";
        }else{
            echo "las dos son false o true</br>";
        }
/* Otra forma es con la negacion !(no es verdader o no es falso es lo contrario.) y quedaria asi
si; negamos si $var1 es falsa y $var2 es verdadera OR $var1 es verdadera Y $var2 es falsa  

    if(!$var1 && $var2 || $var1 && !$var2){
        echo "solo uno es true";
    }else{
        echo "Los dos son True o los dos son FALSE";
    }
    */
// Actividad 3

/* Crear una aplicacion que muestre todos los numeros multiplos de 9 y 13 que hay entre 0 y 1000 
y despues guarde los valores en un array*/
    $varriable_Array = array(); // Creamos un array vacio

    echo "<h2> Multiplos de 9 y 13</h2>";
    for ($i = 0; $i <= 1000; $i++){ // un for para hacer el recorrido for parentensis llaves 
        if ($i % 9 == 0 || $i % 13 == 0){/* creamos un if parentensis  para saber si son divisibles 
                                            y que sean igual a 0 y abrimos llaves desps del if */
        echo $i . " ";// imprime o retorna
        $varriable_Array[] = $i;/*mete los valores multiplos $i en el array en la posicion [] 
                                como no indicamos es la siguiente que este disponible*/
    }
    }
    echo "<h3>del Array</h3>";
    foreach ($varriable_Array as $num => $valor){// Retornamos los numeros del array con el foreach variable en el num.
        echo $num. " Clave " . $valor. "valor </br>";
    }

?>