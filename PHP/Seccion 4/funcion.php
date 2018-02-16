<?php

/*function nombre_funcion(){
    codigo de la funcion
}*/

// convenio separarlas por "_"
// funcion simple

function mostrar_mensaje(){
    echo "hola";
}

mostrar_mensaje();// muestra "hola".

// sin parametros y con retorno

function obtener_fecha(){
    return date ("d/m/y");/* calcula la fecha actual en dicho formato; 
                             despues del return no se ejecutara nada y solo retorna el resultado*/
}
echo "Fecha actual:". obtener_fecha();// Muestra "fecha actual: 18/08/2018 por ejemplo

// Con un parametro
/*
function nombre_funcion($nomb_parametro){
    // codigo d ela funcion
}*/

// funcion que salude al usuario que pasamos como parametro

function saluda($nombre){
    echo "hola $nombre";
    }
saluda("Anderson"); // Muestra Hola Anderson

/* Con varios parametros 
function nombre_funcion($parametro1, $param2, $parame3,....){codigo de la funcion}*/

// Media entre 2 numeros

function media($num1, $num2){
   return ($num1 + $num2) /2 ;
}
$resutado = media(303,404);  // devuelve 353.5; el $num1 recibe 303 y el $num2 404 aqui se pasan los parametros

/* Con parametros opcionales
function nombre_funcion($parm1, $param2, paramop...){} siempre va primero los parametros y desps los opcionales
*/
// Devuelve la suma de 2 o 3 numeros

function suma($num1, $num2, $num3op = 0){
    return ($num1+$num2+$num3op);

}
$resultado1 = suma(100, 200);// devolvera 300
$resultado2 = suma (100, 200, 300);// devolvera 600
echo $resultado1;
echo $resultado2;

/*Argumentos variables o infinitos
function nombre_funcion(...$mas_param){} la variable $mas_param se convierte en un array al que podemos recorrer
    y lleva los "..." para hacer una funcion de varios argumentos o inifinitos argumentos */

function suma_variable(...$nums){
    $total = 0;
    foreach ($nums as $num){
        $total += $num;
    }
    return $total;
}
$resultado3 = suma_variable(1,2);
$resultado4 = suma_variable(1,2,3,4,5,6,7,8,9,10);

echo $resultado3;
echo $resultado4;

function repetir(&$palabra){// OJO con e & que toma la variable globalmente
    $palabra .= $palabra;
    echo $palabra;
}
$saludo = "hola";
echo repetir($saludo);// Mostrara holahola
echo $saludo;// mostrara hola hola tambien por que el & hacer que se tome toda la variable general sin el no lo hara

//ambito de variables

$edad= 1;

function mostrar_edad(){
    echo $edad;
}
mostrar_edad();/* no mostraria nada ya que a variable $edad esta fuera de la funcion no dentro para que una 
variable tenga valides debe estar dentro de la funcion*/

// variable global

$edads= 1;
$variable2 = "texto";

function mostrar_edad1(){
    global $edads, $variable2;// toma la variable global que vale 1 en este caso
    echo $edads;
}
mostrar_edad1();
?>