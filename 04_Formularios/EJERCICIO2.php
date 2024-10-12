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
        <input type="text" name="numero1" id="num1">
        <input type="text" name="numero2" id="num2">
        <input type="text" name="multiplo" id="mul">
        <input type="submit" value="enviar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            $multiplo = $_POST["multiplo"];
            $frase = "";

            for ($i = $numero1; $i <= $numero2; $i++) { 
                if ($i % $multiplo == 0) {
                    $frase.=$i." ";
                }
            }echo "<h1>los multiplos de $multiplo entre $numero1 y $numero2 son $frase</h1>";
        }
    ?>
</body>
</html>