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
        <input type="text" name="temperatura" id="temp">
        <select name="tem1">
            <option value="Cº">Cº</option>
            <option value="Fº">Fº</option>
            <option value="Kº">Kº</option>
        </select>
        a
        <select name="tem2">
            <option value="Cº">Cº</option>
            <option value="Fº">Fº</option>
            <option value="Kº">Kº</option>
        </select>
        <?php
        function celsius_kelvin($tipo1){
            $tipo1 = $tipo1 + 273.15;
            return $tipo1;
        }
        function celsius_farenhait($tipo1){
            $tipo2 = $tipo1 ($tipo1 * 1.8)+32;
            return $tipo1;
        }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $temperatura = $_POST["temperatura"];
                $tipo1 = $_POST["tem1"];
                $tipo2 = $_POST["tem2"];
                $res = match ([$tipo1,$tipo2]) {
                     ["Cº","Kº"] => celsius_kelvin,
                     ["Cº","Fº"] => celsius_farenhait,
                }
            }
        ?>
    </form>
</body>
</html>