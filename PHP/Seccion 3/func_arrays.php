<?php

// bool is_array(mixed $var) // saber si es un array o no


$var1 = array(1,2,3,4,5,6,7,8,9);
$var2 = "Array de letras?";
$var3 = array("uno"=> 1, "dos"=> 2, "tres"=> 3, array(1,2,3));


is_array($var1);// True
is_array($var2);// false
is_array($var3);// True
//count cuenta los elementos 
//int count (mixed $var [, int $mode = count_normal])
echo count($var1);// True
//echo count($var2);// warning no es un array
echo count($var3);// True
//count cuenta los elementos 
//int count (mixed $var [, int $mode = count_normal])
echo count($var1);// True
//echo count($var2);// warning no es un array
echo count($var3, COUNT_RECURSIVE);// True

// visualizar un array
$var4 = array("uno"=> 1, "dos"=> 2, "tres"=> 3, array(1,2,3));
echo "</br>";
print_r($var4);
echo "</br>";
var_dump($var4); // muestra el tipo de dato

/*NOTA: desde php 5.4 en adelante debemos usar para crear un array la siguiente forma:
    $var = [1,2,3,4,5] esto es un array las dos formas pueden usarse
    */
// range() - rellena un array con un numero aleatorio de numero array range (mixed $start, mixed $end [,number $step = 1])

$array = range(1,10);
$array = range(1,10,2);
$array = range(1,10, -1);

foreach(range(0,10) as $i){
    echo "iteracion $i\n </br>";
}
?>