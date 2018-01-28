<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HTML + PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>HTML + PHP</h1>
    <?php 
    /*Creamos variables de tipo string, integer, float, boolean */
    $nombre = "Anderson ";
    $numero1 = 15;
    $numero2 = -3;
    $numero3 = 0;
    $PI = 3.1415;
    $radio = 15;
    $media = ($numero1 + $numero2 + $numero3) / 3;
    $area = $PI * $radio * $radio;// area del circulo
    echo "Hallar la media de: \n15\n-3\n0";
    echo "<br/>";
    echo "Hallar el area del circulo de PI = 3.1415, radio = 15";
    echo "<br/>";
    echo "Hola,\n" . $nombre . "La media es de: " . $media . " El area del circulo es: " . $area; // Imprime un texto + la variable
    // boolean
    // supongamos que hoy es martes
    $ayer_fue_lunes = true;
    $ayer_fue_jueves = false;
    /* comentario de
    varias lineas*/
    ?>
</body>
</html>
