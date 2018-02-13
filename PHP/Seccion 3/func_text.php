<?php
echo "mensaje 1";
print "mensaje 2";

// is_string() - averigua si es un string

is_string("Hola");// true
is_string(M_PI);//false
is_string(12);//false
is_string("c");//true

// strlen() - calcula el tamaño de un string
// Ejemplo mostrar cada letra en una linea; se puede mostrar como un array la letra; echo $str[0]

$str = "palabra";

for($i=0; $i<strlen($str); $i++){ // mientras $i sea menor que la logintud del string en este caso 7
    echo $str[$i]."\n";// retorne la variable en la posicion $i .
}

/*strpos() -encontrar la posicion de un texto en un string. 
mixed strpos (string $haystack, mixed $needle, [, int $offset = 0])*/

$str = "En un lugar de la mancha...";

strpos($str, "en");// devuelve 0 es la posicion donde comienza
strpos($str, "Walter");// False
strpos($str, "Mancha");// muestra la posicion 18 que es donde comienza
strpos($str, "l", 10);// busca apartir de la posicion 10 mostraria 15 la segunda L

if(strpos($str, "en")!== FALSE){ // si la palabra contenida en la variable $str es distinto y distinto tipo
    echo "encontrado \n";// imprime esto
    }else{// de lo contrario imprime esto
        echo "no encontrado";
    }

?>