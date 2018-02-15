<?php
$precio = 1.2; // Precio del producto
$pagado = 2; // Pagado por el cliente

// array con los billetes y monedas disponibles
$disponible = array(500, 200, 100, 50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01);
$nodisponible = array(0.1, 0.2);
$cambio = $pagado - $precio;// Calculamos el cambio que debe ser devuelto
echo "el cambio a dar es de: ".$cambio."€</br>";
echo "Billetes no disponibles: $nodisponible[0] y $nodisponible[1] el cambio a dar es:</br>";
$i = 0;// inicializamos $i en 0
/* Creamos un do while donde; mientras el billete o moneda disponible se mayor a cambio,
incremente el contador hasta que consiga un que sea menor o igual y lo imprime;
despues vuelve a calcular el cambio, con el cambio anterior segun lo pagado por el cliente y
le resta la moneda o billete que en la posicion $i osea el que fue encontrado menor o igual,
todo esto pasara mientras el cambio sea mayor que la moneda o billete disponibles, contando 
los elementos del array */
do {
    while($disponible[$i] >= $cambio){
        $i++;// incremente
    }if ($disponible[$i] == $nodisponible[0] || $disponible[$i] == $nodisponible[1]){
        $i++;// incremente, pasa a la siguiente moneda       
        $i++;// Incrementa el segundo elemento encontrado
        }
    echo "$".($disponible[$i])."€ </br>";    
    $cambio = $cambio - $disponible[$i]; // se le resta la moneda usada
}while ($cambio > $disponible[count($disponible)-1]); /* mientras el $cambio sea mayor que una de las monedas
disponibles entonces cuando; ya $cambio es 0 por que es menor que una de las moneda para. */

?>