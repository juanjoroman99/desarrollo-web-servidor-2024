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
        <input type="submit" value="enviar">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            echo "<ul>";
            for ($i=$numero1; $i <= $numero2; $i++) { 
                $es_primo = true;
                for ($j=2; $j <= $i/2; $j++) { 
                    if ($i % $j == 0) {
                        $es_primo =false;
                    }
                }
                if ($es_primo) {
                    echo "<li>$i</li>";
                }
            }
            echo "</ul>";
        }
    ?>
    
</body>
</html>