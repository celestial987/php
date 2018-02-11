<?php
/*
$n = 10;

for($i=1; $i <= $n; $i++){
    echo ($i*7)." ";
}
*/

$n = 4;// Numero de repeticiones
$i = 0;
do {
    $i++;// incrementa
    if($i % 7 == 0){// si $i entre 7 es igual a 0 entones imprimalo
        echo $i ." ";// imprime el multiplo
        $n--;// quita un valor a n osea una repeticion.
    }

}while($n > 0);
?>