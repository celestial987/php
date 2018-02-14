<?php

// heredoc para contenido rico que tendra contenido html o binario o xml etc
$foo = "valor";
$str = <<<"HTML"
contenido del string $foo
HTML;

echo $str."</br>";

// nowdoc - no procesa las variables
// muestra $foo y no valor
$foo = 'valor';
$str = <<<'HTML'
contenido del string $foo 
HTML;

echo $str."</br>";

// curly syntax

$foo = "valor";
$fooes = "Otro valor";
$str = "Este string contiene $fooes.</br>"; // para no concatenar podemos hacer esto
$str2 = "Este string contiene {$fooes}es.</br>";// entre llaves o fuera de llaves puede ir el $ seguido del string
$str3 = "Este string contiene ${fooes}es.</br>";// entre llaves o fuera de llaves puede ir el $ seguido del string


echo $str;
echo $str2;
echo $str3;

/* chr; devuelve el caracter ascii y ord; devuelve el numero ascii
string chr(int $ascii) y int ord(string $string)
*/


?>