<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors",1);
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="entrada">Numero</label>
        <input type="text" name="entrada" id="entrada">
        <br><br>
        <select name="operacion">
            <option name="fact">factorial</option>
            <option name="sumat">sumatorio</option>
        </select>
        <input type="submit" name="calcular">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $entrada = $_POST["entrada"];
            $operacion = $_POST["operacion"];
            $aux; // creo esta variable auxiliar para que al ejecutar los for no hagan bucle infinito
            

            if ($operacion == "factorial") {
                $aux = $entrada;
                for ($i=0; $i <= $aux; $i++) { 
                    $entrada = $entrada + $i;
                }
            }elseif ($operacion == "sumatorio") {
                $aux = $entrada;
                $entrada = 0;
                for ($i=0; $i <= $aux ; $i++) { 
                    $entrada = $entrada + $i;
                }
            } echo "<p>$entrada</p>";
        }
    ?>
</body>
</html>