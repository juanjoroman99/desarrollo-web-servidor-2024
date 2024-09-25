<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<body>
    <?php
    $numero = "2";
    $numero = (int) $numero;

    if ($numero === 2):
        echo "<p>EXITO</p>";
    else:
        echo "<p>NO EXITO</p>";
    endif;

    /*
        "2" == 2    "2" es igual a 2            
        "2" !== 2   "2" no es identico a 2
        2 === 2     2 si es identico a 2
        2 !== 2.0   2 no es identico a 2.0
    */
    
    $hora =(int) date ("G");
    //var_dump($hora);
    /* 
        si $hora esta entre 6 y 11, es MAÑANA
        si $hora esta entre 12 y 14 es MEDIODIA
        si $hora esta entre 15 y 20 es TARDE
        si $hora esta entre 20 y 24 es NOCHE
        si $hora esta entre 1 y 5 es MADRUGADA
    */
    $hora = (int) date("G");
    $texto;
    if ($hora >5 and $hora <12):
        $texto = "MAÑANA";
    elseif ($hora >12 and $hora <14):
        $texto = "MEDIODIA";
    elseif ($hora >15 and $hora <20):
        $texto = "TARDE";
    elseif($hora >20 and $hora <24):
        $texto = "NOCHE";
    elseif ($hora >1 and $hora <5):
        $texto = "MADRUGADA";
    endif;

    echo "<p>$texto</p>";
    echo "<h1>$hora</h1>";

    $n = rand(1,3);

    switch($n){
        case 1:
            echo "<p>El numero es 1</p>";
            break;
        case 2:
            echo "<p>El numero es 2</p>";
            break;
        case 3:
            echo "<p>El numero es 3</p>";
    }

    $dia = date("l");
    $aurf = "Hoy hay clase";
    echo "<h2>Hoy es $dia</h2>";    

    switch ($dia) {
        case "Monday":
        case "Wednesday":
        case "Friday":
            echo "<p>$aurf</p>";
            break;
        
        default:
            echo "<p>Hoy no hay clase</p>";
    }
    ?>
</body>
</html>