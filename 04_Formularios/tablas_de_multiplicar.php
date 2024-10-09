<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        CREAR UN FORMULARIO QUE RECIBA UN NUMERO

        SE MOSTRARA LA TABLA DE MULTIPLICAR DE ESE NUMERO EN UNA TABALA HTML

        2 X 1 = 2
        2 X 2 = 4
        ...
    -->
    <form action="" method="post">
        <label for="numero">numero</label>
        <input type="text" name="numero" id="base" placeholder="Introduzca un numero">
        <input type="submit" value="enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $resultado = 1;

        for ($i=1; $i <= 10 ; $i++) { 
            $resultado = $numero * $i;
            echo"<p>$numero x $i = $resultado</p>";
        }
    }    
    ?>
</body>
</html>