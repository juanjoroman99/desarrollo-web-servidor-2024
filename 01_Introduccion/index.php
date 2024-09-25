<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
    DEFINE("PI",3.1415926535);
    $mensaje = "Hola mundo";
    echo "<h1>El mensaje es $mensaje</h1>"; //echo muestra por consola
    echo "<h1>PI vale ". PI . "</h1>";

    $numero = 3;
    var_dump($numero); // muestra la ruta entera

    $numero_decimal = 4.67;
    var_dump($numero_decimal);

    $numero_grande = 3e10;
    var_dump($numero_grande);

    $numero = true;
    var_dump($numero);

    $mensaje = "Adios mundo";
    var_dump($mensaje);

    var_dump(PI);
    ?>
    <?php echo $texto = "Hola mundo"
    ?>
</body>
</html>