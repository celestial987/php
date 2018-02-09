<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejercicio 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1 class ="titulo">Ejemplo 4</h1>
    <p>Ejercicio simple mostrando el navegador usado y la ip del cliente</p>
    <?php
    echo "El navegador usado es: " . $_SERVER["HTTP_USER_AGENT"] . " La ip desde la cual nos visitas es: </br>" 
    . $_SERVER["REMOTE_ADDR"]; // Ip desde la que se ingresa
    ?>
</body>
</html>