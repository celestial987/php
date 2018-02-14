<?php 
// seguridad en html 
$nombre = '<a href= "http://a.cz/virus.php"> Click aqui </a>';
// htmlspecialchars muestra el texto entero no como link
//htmlentities() convierte todos los caracteres posibles a su caracter especial html
// htmlspecialchars_decode inversa de htmlspecialchars
// html_entity_decode(); inversa de htmlentities
$precio = "el precio es de 1000€";

// wordwrap() // separar un string en partes

$text = "el veloz murcielago hindu comia feliz cardillo y kiwi";
$nuevotexto = wordwrap($text, 20, "</br>");
echo $nuevotexto."</br>";

// parse_url() ; analizar y extraer campos de una url

$url = "https://www.ejemplo.com:8080/pagina.php?parametro1=valor1#apartado";
$partes = parse_url($url);
foreach($partes as $parte1 => $parte2){
    echo $parte1 .": ". $parte2."</br>";
}

// urlencode() y urldecode(); convierte una url codifica en normal y viceversa
$url2 = "www.test.com/uni%c3%B3";
echo urldecode($url2);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Seguridad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<p> hola <?php echo $nombre;?> <?php // puede mostrar un web con virus para evitar esto ?>
<p>Hola <?php echo htmlspecialchars($nombre);?> </p> <?php // usamos htmlspecialchars?>
<?php 
    echo htmlspecialchars($precio) . "</br>";
    echo htmlentities($precio); 
?>
 
</body>
</html>
