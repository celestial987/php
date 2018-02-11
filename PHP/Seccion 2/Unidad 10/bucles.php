<?php

// Forma while
    $numero = 1;
    while($numero < 10){
        echo "Aumento numero: " . $numero++ . "</br>";
        //$numero += 1; // o ++$numero 
    }
    echo " FIN del while." . $numero. "</br>";

// Forma do while

    $numero = 0;
    do {                        // has esto
        echo "condicion del do:" . $numero . "</br>";// muestra y despues incremente
       // ++$numero;
    } while (++$numero < 5);      // Mientras la condicion se cumple.
    echo "FIN del do while: " . $numero . "</br>";
    
// ciclo For

    for ($i= 0; $i <= 5; $i++){
        echo "</br> Ciclo for numero ". $i . "</br>"; // Incrementa despues de retornarlo o mostrarlo.
        
    }

// foreach recorrer arrays

    $numeros = array(12, 10, -1, -25, 8);
    foreach ($numeros as $clave => $valor){
        echo $clave . "*" . $valor . "=" . $clave * $valor ."</br>";
    }

// continue y break

    $i = 0;
    do{
        if ($i == 5){
            continue;
        }
        echo $i ." ";
    } while (++$i <= 10);
// Break
    $i = 0;
    do{
        if ($i ==5){
            break;
        }
        echo $i . " ";
    }while (++$i < 10);
// ejercicio

    $i = 10;
    do {
        if ($i % 3){
            continue;
        }
        echo "</br>" .$i . " ";
    }while(--$i); /* distinto de 0, lo convierte a boolean automaticamente, true = 1 false = 0, 
    un entero siempre sera true y 0 sera false*/

?>

