<?php
$formato = "%d del %m del %y";
$fecha = "12 del 01 del 2020"; // 0 2 4

//$dia = substr($fecha, 0, 2);
//$mes = substr($fecha, 7, 2);
//$año = substr($fecha, 14, 4);
/*
$array = explode(" ", $fecha);// sacamos con explode las partes del string x string
// y asi las agarramos segun su posicion
$dia = $array[0];
$mes = $array[2];
$año = $array[4];
*/
list ($dia,,$mes,,$año)= explode(" ",$fecha);// ",ignorado,"para que tome 1 3 
echo $dia. "-". $mes. "-" . $año;

?>