<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Arrays y Objets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <h1>arrays y objets</h1>
<?php
    /*array => para agregar un valor al array de esa posicion en ves de 0, 1, 2 es borota,palmira,tachira*/
    $poblacion = array (
        "borota"=> 50,
        "palmira"=> 60,
        "tachira"=> 100
    );

    echo "la poblacion de borota tiene una cantidad de habitantes de: " . $poblacion["borota"] . 
    "\nla poblacion de palmira tiene: ". $poblacion["palmira"] . "\nEl tachira tiene: ". $poblacion["tachira"] . "</br>";

    // Añadimos al array
    $poblacion["cariñito"]= "Kelly";
    echo $poblacion["cariñito"]. "</br>";
    $poblacion["cariñito"]= "Kelly del carmen";
    echo $poblacion["cariñito"];
?>
</body>

</html>