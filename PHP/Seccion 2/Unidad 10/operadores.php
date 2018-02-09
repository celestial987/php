<?php
    // operadores aritmeticos
    $a = 1+1;
    $a = 1-1;
    $a = 2*2;
    $a = 10/2;
    $a = 10%2;

    // Operadores de string solo hay uno el de concatenacion

    $nombre = "Anderson ";
    $apellido = "Gaitan";
    $nombre_Completo = $nombre . $apellido;
    echo $nombre_Completo;

    // Operadores logicos
    /* !$a - Si $a es TRUE entonces !$a es false y viceversa("!" hace lo contrario 
    si es verdadero a falso y viceversa)
    $a = TRUE; 
    echo !$a;*/

    /* $a&&$b si las dos son verdaderas es TRUE si alguna de las dos es false da false*/
    /*$a||$b si las dos son verdaderas da verdadera, si una es falsa y otra verdadera da verdadera
    si las dos son false da false*/

    //Ejempos 

    // Logicos
    $a = FALSE;
    $b = 12;
    $c = !$a; // Negacion: !FALSE => TRUE 
    $c = !$b; // Negacion: !TRUE => FALSE
    $c = $a && $b; // Y: FALSE, pues a$ noes true.
?>