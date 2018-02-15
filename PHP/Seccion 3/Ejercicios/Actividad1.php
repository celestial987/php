<?php

$usuarios=array(
    1=>array('nombre'=>'Juan','nacimiento'=>'06/10/1988'),
    2=>array('nombre'=>'Laura','nacimiento'=>'16/12/1993'),
    3=>array('nombre'=>'Daniel','nacimiento'=>'22/09/1970'),
    4=>array('nombre'=>'Hugo','nacimiento'=>'01/09/1982'),
    5=>array('nombre'=>'Elisa','nacimiento'=>'27/02/1974'),
);

    
foreach($usuarios as $key => $usuario) {
    list($user_dia, $user_mes, $user_año) = explode("/", $usuario["nacimiento"]);
    if((date("Y") - $user_año) > 27 ) {
        
        echo $usuario["nombre"]." tiene mas de 27 años </br>";    
}
else{
    echo $usuario["nombre"]." tiene menos de 27 años</br>";
}
}
?>