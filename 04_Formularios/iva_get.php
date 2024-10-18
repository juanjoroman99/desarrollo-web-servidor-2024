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
<!--
    GENERAL = 21%
    REDUCIDO = 10%
    SPUERREDUCIDO = 4%

    10€ IVA = GENERA, PVP = 12,1€
    10€ IVA = REDUCIDO, PVP = 11€
    -->

<form action="" method="get">
    <label for="precio">Precio</label>
    <input type="text" name="precio" id="precio">
    <br><br>
    <select name ="iva">
        <option value="General">General</option>
        <option value="Reducido">Reducido</option>
        <option value="Superreducido">Superreducido</option>
    </select>
    <input type="submit" value="Calcular">

    <?php
    //isset (is set) devuelve true si la variable existe
    DEFINE("iva_general",1.21);
    DEFINE("iva_reducido",1.1);
    DEFINE("iva_superreducido",0.4);
    if(isset($_GET["precio"]) and isset($_GET["iva"])){
    $precio = $_GET["precio"];
    $iva = $_GET["iva"];
    
   $precio_iva = match ($iva) {
        "General" => $precio * iva_general,
        "Reducido" => $precio * iva_reducido,
        "Superreducido" => $precio * iva_superreducido,
        default => "ERROR",
    };
    echo"<h1>El precio total es $precio_iva</h1>";
}
    ?>
</form>
</body>
</html>