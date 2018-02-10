<?php
    /*$edad = 18;
    const edad_votar = 18;
    $es_mayor_de_edad = $edad >= edad_votar;
    if ($es_mayor_de_edad) 
    {
        echo "Tu edad es:" . $edad . " y Puedes votar.\n";
    }
    */
    //Forma correcta y normal

    $edad = 22;
    const edad_votar = 18;

    if ($edad >= edad_votar){
        echo "Tu edad es:" . $edad . "\n puedes votar</br>";
    } else {
        echo "Tu edad es:". $edad ." Eres menor de edad no puedes votar.</br>";
    }

    $temperatura = "S";

    if ($temperatura>= 100){
        echo "El agua esta en estado gaseoso</br>";
    }elseif ($temperatura > 0 && $temperatura < 99){
        echo "El agua esta en estado liquido</br>";
    } elseif (is_string($temperatura)){ //is_string se usa para saber si la variable es numero o de tipo strin
        echo "La temperatura no es validad ya que es un texto y no un numero.</br>";
    } else {
        echo "El agua esta en estado solido</br>";
    }

    $color = "Red";
    switch($color) {
        case "red" || "Red":
                echo "El color es red</br>\n";
                break;
        case "green":
                echo "El color es Green</br>\n";
                break;
        case "Blanco":
                echo "El color es blanco</br>\n";
                break;
        default:
                echo "No reconosco e color</br>";
                break;
    }
    echo "Fuera del switch";

    // uso para generar plantillas HTML casi no se usan
    /*<DOCTYPEhtml>
    <html>
        <head>
        <title>Ejemplo</title>
        </head>
        <body>
        <?php$edad=21;if($edad>=18):?>
        <p>Paravotarpulsa<ahref='/votar.php'>aquí</a><p>
        <?phpelse:?>
        <p>Aúnnopuedesvotar<p>
        <?phpendif;?>
        </body>
    </html> */