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
        <select name="inicial">
            <option value="C">C</option>
            <option value="F">F</option>
            <option value="K">K</option>
        </select>
        a
        <select name="final">
            <option value="C">C</option>
            <option value="F">F</option>
            <option value="K">K</option>
        </select>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $temperatura = $_POST["temperatura"];
                $inicial = $_POST["inicial"];
                $final = $_POST["final"];
                
                
            }
        ?>
    </form>
</body>
</html>