<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors",1);
    ?>
</head>
<body>
    <form action="" method="post">
        <label>Salario</label>
        <input type="text" name="salario" id="sal">
        <input type="submit" value="enviar">
    </form>

    <?php
        define("TRAMO1",$salario*0.19);
        define("TRAMO2",$salario*0.24);
        define("TRAMO3",$salario*0.30);
        define("TRAMO4",$salario*0.37);
        define("TRAMO5",$salario*0.45);
        define("TRAMO6",$salario*0.47);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $salario = $_POST["salario"];

            $sueldo_final = match (true) {
                $salario <= 12450 => $salario - (($salario*19)/100),
                $salario > 12450 and $salario <= 20199 => ($salario - (12450 - TRAMO1)),
                $salario > 20199 and $salario <= 35199 => ,
                $salario > 35199 and $salario <= 59999 => ,
                $salario > 59999 and $salario <= 20199 => ,
                $salario > 20199 and $salario <= 300000 => ,
            };
            echo "<h1>Su salario con deducciones es $sueldo_final</h1>";

        }
    ?>
</body>
</html>