<?php

/* averiguar si es numerico tenemos 3 funciones
1.- is_numeric()
2.- is_int() / is_integer() / is_long()
3.- is_float() / is_double() / is_real()*/

/* ejemplos

$num1 = "#12";// el # precede lo convertira en "0" y no el 12 debe estar primero el 12
$num2 = 10;
echo $suma($num1, $num2); // A suma le llega 1 string el # 
*/

// bool is_numeric(mixed $var) // devuelve un boleano true o false 

is_numeric(12); // True por que si es numerico. 
is_numeric(1.13);// True es numerico.
is_numeric(112, 3);// False y warning se estan pasando 2 parametros.
is_numeric("61");// True es string pero es numerico.
is_numeric("#61");// False ya que lo precede un string.
is_numeric("doce");// False ya que es un string.

// is_int() - bool is_int(mixed $var) - solo comprueba si es entero no numeric

is_int(12);// True - es entero
is_int(1.13);// False - es float no entero
is_int(112, 3);// False y warning - dos valores
is_int("61");// FALSE - es un string

// is_float( mixed $var)

is_float(12);// False es entero
is_float(1.13);// True es de tipo float
is_float(112, 3);// False y warning
is_float("61.3");// False es un string

//decbin(int $number) - de decimal a binario

echo decbin(12);// Muestra 1100
echo decbin(20000);// Muestra 100111000100000

//bindec(String $binary_string) // binarioa  decimal

echo bindec("1100");// muestra 12
echo bindec("100111000100000");// Muestra 20000 

// octal si se le antepone un "0" a un numero lo tomara como octal
//string decoct(int $number)
$numero1 = 12; // asignda 12 en entero
$numero2 = 014;// Asignda 12 en octal
echo decoct($numero1); // Muestra "14" en string
echo decoct($numero2); // Muestra "14" en string 

// de octal a decimal
// number octdec(string $octal_string)

octdec("8");// devuelve un 8
octdec("14");// devuelve un 12 entero

// base 16 hexadecimal

$numero1 = 0x10; // 16
$numero2 = 0xAAA; //2730

// Convertir un valor entero a un string en hexadecimal dechex()
//decimal a hexadecimal
// string dechex(int $number)
echo dechex(15);// Muestra "A";
echo dechex(9); // Muestra "9";

//hexdec de ehxadecimal a decimal
// numeric hexdec (string $hex_string)

echo hexdec("FFFFFF");// Muestra 16777215 //#FFFFFF es el color blanco
echo hexdec("10");// Muestra "16"

//base_convert() - convierte un numero entre 2 bases
//string base_convert(string $number , int $frombase , int $tobase);

echo base_convert("11", 2, 10);// pasamos 11  de base 2 a base 10 mostraria un 3
echo base_convert("10", 10, 16);//hexa a dec retornaria una A
echo base_convert("22", 7, 6);// Muestra un 24 base 7 a base 6

// floor() -- redondea a la baja un numero equivalente > (int) $value.

echo floor(2); // muestra 2
echo floor(2.5);// muestra 2
echo floor(2.3);// muestra 2
echo floor(2.9);// muestra 2

// ceil() -- redondea a la alza float ceil(float $value)
echo ceil(2); // muestra 2
echo ceil(2.5);// muestra 3
echo ceil(2.3);// muestra 3
echo ceil(2.9);// muestra 3

// round - redondea al entero mas proximo float round(float $value)
echo round(2); // muestra 2
echo round(2.5);// muestra 3
echo round(2.3);// muestra 2
echo round(2.9);// muestra 3

// rand() - int rand(int $min, int $max) - genera un numero pseudoaleatorio

echo rand(0, 10);// Genera un numero aleatorio entre 0 y 10
echo rand(0, 60);// Genera un numero aleatorio entre 0 y 60

// void srand([int $seed]); reestablece el generador de numeros aleatorios
// int getrandmax (void); devuelve el rango maximo de numeros aleatorios.

// PI() - devuelve el numero pi. float pi(void) M_PI es equivalente

// pow() - number pow (number $base, number $exp) -- eleva a una potencia indicada 
// 2 a la 8 (2^8) podemos hacerlo de varias maneras:

//opcion 1
 echo 2*2*2*2*2*2*2*2; // poco practico 

 //opcion 2 con un for
 $num = 1;
 for($i= 0; $i<8; $i++){
     $num *=2;
 }
 echo $num; // muy largo de hacer

 // opcion 3 con POW()
 echo pow(2, 8);

 // Raiz cuadrada sqrt() // calcula la raiz cuadrada de un numero indicado - float sqrt (float $arg)

 sqrt(10);

 /* funciones trigonometricas 
cos()ycosh()-Coseno y coseno hiperbólico
sin()ysinh()- Seno y seno hiperbólico
tan()ytanh()-Tangente y tangente hiperbólica
acos()yacosh()-Arcocoseno y arcocoseno hiperbólico
asin()yasinh()-Arcoseno y arcoseno hiperbólico
atan()yatanh()-Arcotangente y arcotangente
hiperbólica
deg2rad()-Grados a radianes
rad2deg()-Radianes a grados*/ 

/**OTRAS FUNCIONES
abs()-Valor absoluto de un número
min()-Valor mínimo de una lista o de un array
max()-Valor máximo de una lista o de un array
log()- Logaritmo neperiano */

?>