<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="numero1" id="num1">
        <input type="text" name="numero2" id="num2">
        <input type="text" name="numero3" id="num3">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            $numero3 = $_POST["numero3"];

            $mayor = match (true) {
                $numero1 > $numero2 and $numero1 > $numero3 => "$numero1 es el mayor",
                $numero2 > $numero1 and $numero2 > $numero3 => "$numero2 es el mayor",
                $numero3 > $numero1 and $numero3 > $numero2 => "$numero3 es el mayor",
           };
           echo "<h1>$mayor es el numero mayor</h1>";
        }
    ?>
</body>
</html>