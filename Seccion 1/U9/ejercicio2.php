<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1 class ="titulo">Ejemplo 2</h1>
    <p>Ejercicio simple haciendo la media de un array y usando .implode</p>
    <?php
    $numeros = array(15, 21, -7); //Creamos un Array
    //echo $numeros[0]; muestra la posicion.
    $suma = $numeros[0] + $numeros[1] + $numeros[2]; // Suma de los numeros del array por posicion
    $media = $suma / 3; // sacamos la media diviiendo a suma entre 3
    /*Mostramos con "echo" los strings y usamos el .implode para mostrar el contenido del array,
    y usamos la "," para que se separen los strings el ejemplo exacto es:
    implode($string , $Array) ejemplo: implode (",", $Array)*/
    // .implode muestra el contenido de un array como un string.
    echo "La media de: ".implode(",", $numeros). " es:</br>" . $media;
    ?>
</body>
</html>