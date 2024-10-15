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
        <label for="divisa1">Divisa</label>
        <input type="text" name="dinero" id="divisa1">
        <br>
        <select name="divisa_entrante">
            <option name="euro">euro</option>
            <option name="dolar">dolar</option>
            <option name="yen">yen</option>
        </select>
        
        <select name="divisa_saliente">
            <option name="euro">euro</option>
            <option name="dolar">dolar</option>
            <option name="yen">yen</option>
        </select>
        <br>
        <input type="submit" name="Convertir">
    </form>
    <?php
        function eur_dol($num){
            $num = ($num * 1.06);
            return $num;
        }
        function eur_yen($num){
            $num = ($num * 157.56);
            return $num;
        }
        function dol_eur($num){
            $num = ($num * 0.94);
            return $num;
        }
        function dol_yen($num){
            $num = ($num * 148.73);
            return $num;
        }
        function yen_eur($num){
            $num = ($num * 0.0063);
            return $num;
        }
        function yen_dol($num){
            $num = ($num * 0.0067);
            return $num;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dinero = $_POST["dinero"];
            $divisa_entrante = $_POST["divisa_entrante"];
            $divisa_saliente = $_POST["divisa_saliente"];

            $resultado = match ([$divisa_entrante,$divisa_saliente]) {
                ["euro","dolar"] => $dinero *= 1.06,
                ["euro","yen"] => eur_yen($dinero),
                ["dolar","euro"] => dol_eur($dinero),
                ["dolar","yen"] => dol_yen($dinero),
                ["yen","euro"] => yen_eur($dinero),
                ["yen","dolar"] => yen_dol($dinero),
            };
            echo "<h1>La conversion es $resultado</h1>";
        }
    ?>
</body>
</html>