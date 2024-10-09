<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias</title>
</head>
<body>
    <form action="" method="post">
        <label for="base">base</label>
        <input type="text" name="base" id="base" placeholder="Introduzca la base"><br><br>
        <label for="exponente">exponente</label>
        <input type="text" name="exponente" id="exponente" placeholder="Introduzca el exponente"><br><br>
        <input type="submit" value="enviar">
    </form>
     <?php
     /**
      * CREAR UN FORMULARIO QUE RECIBA DOS PARAMETROS: BASE Y EXPONENTE
      *
      *CUANDO SE ENVIE EL FORMULARIO, SE CALCULARA EL RESULTADO DE ELEVAR
      *LA BASE POR EL EXPONENTE
      * 
      * EJEMPLOS
      *
      * 2 ELEVADO A 3 = 0 => 2X2X2
      */
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST["base"];
        $exponente = $_POST["exponente"];
        $resultado = 1;
        for ($i=0; $i < $exponente; $i++) { 
            $resultado = $resultado * $base;
        }
        echo"<h1>El resultado es $resultado</h1>";

      }
     ?>
</body>
</html>