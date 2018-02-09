<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1 class ="titulo">Ejemplo 3</h1>
    <p>Ejercicio simple mostrando la version de php una variable constante y convirtiendo el contenido del string</p>
    <?php
    // averiguar que version de php se utiliza
        echo "La version de PHP es: " . phpversion(). "</br>";
       //solo funciona con 5.3 o menor; define("VERSIONS", "7.2.1"); 
        const VERSION = "7.2.1"; // Version 5.3 en adelante
        echo "La version del PHP es: " . $version = (int) VERSION;
    ?>
</body>
</html>