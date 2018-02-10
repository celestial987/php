<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ejemplo plantillas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php $edad=11;
    if($edad>=18):?>
    <p>Para votar pulsa <ahref='/votar.php'>aquí</a><p>
    <?php else:?>
    <p>Aún no puedes votar<p>
    <?php endif;?>

</body>
</html>