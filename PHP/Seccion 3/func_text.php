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
strpos($str, "Walter");// False booleano 0 true 1
strpos($str, "Mancha");// muestra la posicion 18 que es donde comienza
strpos($str, "l", 10);// busca apartir de la posicion 10 mostraria 15 la segunda L

if(strpos($str, "En")!== FALSE){ // si la palabra contenida en la variable $str es distinto y distinto tipo
    echo "encontrado \n";// imprime esto
    }else{// de lo contrario imprime esto
        echo "no encontrado";
    }

// SUBSTR - string substr (string $string . int $start [, int $length]) extraer parte de un string

$str = "En un lugar de la mancha";
// opcion 1 concatenando
$str1 = $str[10].$str[11].$str[12].$str[13].$str[14]; // Si fueran 100?? no es factible

//opcion 2 con un for 
$str2 = "";// el string vacio donde se almacenaran los valores
for ($i; $i <=14; $i++){ // si el contador es menor o igual a 14 entonces ...
    $str2 .= $str[$i];// almacena en $str2 todos los valores de $str en la posicion $i ; desps mostrariamos $str2
}

// Opcion 3 y la mas factible con SUBSTR
/* declaraos una nueva variable en este caso $str3 y usamos el substr pasandole la variable $str que es -
la que contiene el string y le decimos de que posicion comenzara y terminara */

$str3 = substr($str, 10, 14);

// string strtolower(string $str)

$str = "Hola";
strtolower($str);// Muestra "hola" - devolvera todo en minusula

// string strtoupper(string $str)

$str = "hola";

echo strtoupper($str);// Muestra "HOLA"

// string ucfirst(string $str) // solo la primera letra del string entero en mayuscula
// string ucwords(string $str) // primera letra de cada palabra en mayuscula

// string trim(string $str,[, string $charlist = "\t\n\r\0\x0B"])// elimina los espacios de un string
echo trim("   Hola mundo </br>");// muestra "Hola mundo"
// RTRIM y LTRIM  elimina los de la derecha(R) o izquierda(L)

echo "</br>";

//-------------------------------------------------------------------------------------

$str = "AndersoN"; // declaramos la variable string
$pos = strpos($str, "r"); // declaramos una variable de posicion, con strpos seleccionamos y encontramos el string apartir de "r"
$subs = substr($str, $pos);// Seleccionamos la cadena de texto de string desde la posicion de la R
$min = strtolower($subs);// lo pasamos a minuscula
$fin = rtrim($min);// eliminamos los espacion de la derecha
echo $fin;// imprime.

// tambien podemos:
$str = "AndersoN";
echo rtrim(strtolower(substr($str, strpos($str, "r"))));
/* Imprimimos ; eliminamos los espacios; pasamos a minuscula; seleccionamos la cadena apartir de -
la posicion establecida por strpos que busca la posicion*/


?>