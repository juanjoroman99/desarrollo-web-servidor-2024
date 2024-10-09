<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edades</title>
</head>
<body>
    <!--
        CREAR UN FORMULARIO QUE RECIBA EL NOMBRE Y LA EDAD DE UNA PERSONA

        SI LA EDAD ES MENOR QUE 18 MOSTRARA EL NOMBRE

        SI LA EDAD ESTA ENTRE 18 Y 65 SE MOSTRARA EL NOMBRE Y QUE ES MAYOR DE EDAD

        SI LA EDAD ES MAS DE 65 MOSTRARA EL NOMBRE Y QUE SE HA JUBILADO
    -->
    
        <form action="" method="post">
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="introduzca el nombre"><br><br>
        <label for="edad">edad</label>
        <input type="text" name="edad" id="edad" placeholder="introduzca la edad"><br><br>
        <input type="submit" value="enviar">
        </form>
        <?php
       /*     if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $nombre = $_POST["nombre"];
                $edad = $_POST["edad"];

                if ($edad < 18) {
                    echo "<h1>$nombre</h1>";
                }elseif ($edad > 18 and $edad < 65) {
                    echo "<h1>$nombre es mayor de edad</h1>";
                }else{
                    echo "<h1>$nombre se ha jubilado y esta con mis abuelos claramente dead</h1>";
                }*/

                $resultado = match (true) {
                     $edad < 18 => "<h1>es menor de edad</h1>",
                     $edad > 18 and $edad < 65 => "<h1>es mayor de edad</h1>",
                     $edad > 65 => "<h1>se ha jubilado y esta con mis abuelos claramente dead</h1>",
               }
        ?>
</body>
</html>