<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    // Conversiones entre tipos escalares
    /*Primero el valor es 25 en string osea en letra o texto
    y despues lo pasamos a integer, por lo tanto ahora es de tipo numerico
    con el cual podemos hacer calculos etc, leerlo alreves.*/
    $edad_string = "25"; // Es de tipo String (Esta entre comillas).
    $edad_int = (integer) $edad_string; // edad_int vale 25 (integer)
    
    // de float a integer
    $pi =3.1415; // Es de tipo Float
    $pi_redondeado = (int) $pi; // Ahora vale 3 redondeado ahora es integer.
    echo $pi_redondeado . "</br>";

    // De boolean a String

    $es_siglo_21 = TRUE; // Vale true, luego sera string
    $es_siglo_21_string = (string) $es_siglo_21; // Se convierte a 1.

    // De string a int

    $pelicula = "12 monos"; // Es tipo string
    $pelicula_int = (int) $pelicula; // Ahora es solo el numero "12", sin las letras

    // Otra via

    $frase = "tengo 105"; // Es string
    $frase_integer = (int) $frase; // Dara valor 0 por que primero esta de tipo texto
    

    // variables predefinidas principales

    /*$_SERVER  - Variables de entorno de ejecucion(como la ip del server o cliente etc)
      $_GET     - Variables recibidas por HTTP GET.
      $_POST    - Variables recibidas por HTTP POST.
      $_FILES   - Variables con archivos cargados por HTTP.
      $_REQUEST - Combina _GET, _POST, _FILES
      $_COOKIE  - Variables de las cookies HTTP
      $_SESSION - Variables de sesion PHP
      $_ENV     - variables de entorno */

      // Ejemplos

      echo "el navegador que usas es " . $_SERVER["HTTP_USER_AGENT"] . "</br>"; // Informacion del navegador que realizo la peticion
      echo "Tu ip es " . $_SERVER["REMOTE_ADDR"]; // Ip del cliente 
      

      // http://php.net/manual/es

      // variables CONSTANTES

      //define("NOMBRES", "valor");
      define("NOMBRES", "anderson "); // forma old

      //const NOMBRE = "valor";
      const PI = 3.1415;

      // constantes predefinidas
      echo "</br>" . __FILE__ . "</br>";
      echo __DIR__ . "</br>";
      echo __LINE__;
    ?>
</body>
</html>