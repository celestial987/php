<?php

    /* == : igual a
       === : identico a
       != : diferente a o de
       !== : no identico o tipso diferentes
       < : menor que
       <= : menor igual que
       > : mayor que
       >= : mayor o igual que */

    // Comparacion

    $a = 12;
    $b = "12";
    $c = 10;

    $a == $b; // 12 es igual que "12" en string = SI da TRUE
    $a == $c; // Comparacion : FASE
    $a === $b; // Comparacion: FALSE (distintos tipos)
    $a != $b; // Son iguales, no son diferentes Comparacion: FALSE
    $a !== $b; // 12 no es identico a "12", TRUE (los tipos son diferentes uno string y el otro int)
    $a != $c; // TRUE  12 es distinto de 10.
    $a < $b; // false son iguales
    $a <= $b; // TRUE son iguales
    $a > $c; //TRUE 12 es mayor que c
    $a >= $c; // si es igual y mayor osea TRUE
    
    // Operadores de los Array

    
    $edades1=array('Luis'=>27,'Ángel'=>21);
    $edades2=array('Ángel'=>21,'Luis'=>27);
    $edades3=array('Luis'=>27,'Ángel'=>'21');
    $edades4=array('María'=>22);
    $edades1==$edades2;//Igualdad:TRUE
    $edades1==$edades3;//Igualdad:TRUE
    $edades1===$edades2;//Idénticos:FALSE(distintoorden)
    $edades1===$edades3;//Idénticos:FALSE(distintostipos)
    $edades1+$edades4;//Unión:array('Luis'=>27,'Ángel'=>21,'María'=>22)

    /* Operadores de asignacion
    $a=$aOPERADOR$b;
    $aOPERADOR=$b;
    .=Concatenar y asignar
    += Entre números: Sumar y asignar. Entre arrays: unir
    -=Restar y asignar
    *= Multiplicar y asignar
    /= Dividir y asignar
    */

    //Operadoresdeasignación
    $texto="En un lugar";//Asignación
    $texto.="de la Mancha";/*Equivalentea$texto=$texto."delaMancha"; Lo que hace es agregarle a la variable 
    algo mas y quedaria o mostraria "En un lugar de la mancha"*/
    $a=5;//Asignación
    $a+=2;//Sumara$a2:7; 5+2 = 7
    $a-=1;//Restara$a1:6; 7-1 = 6
    $a*=2;//Multiplicar$apor2:12; 6*2 = 12
    $a/=3;//Dividir$aentre3:4; 12/3 = 4

    // Operadores de incremento / decremento
    /* ++$a PRE-INCREMENTO; primero incrementa en 1 y luego retorna o muestra el valor
       $a++ POST-INCREMENTO; primero retorna o muestra el valor y despues incrementa
       --$a PRE-DECREMENTO 
       $a-- POST-DECREMENTO*/

    $a = 5; // $a vale 5
    $b = 5; // $b vale 5
    echo ++$a;//Muestra6; incrementa y retorna
    echo $a; //Muestra6; mostraria 6
    echo $b++;//Muestra5; retorna e incrementa muestra 5 pero si despues mostramos $b lo mostraria con incremnto
    echo $b; //Muestra6
?>