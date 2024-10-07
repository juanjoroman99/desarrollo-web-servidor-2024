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
    <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
    $array = [1,2,3,4];

    $videojuegos = [
        ["Disco Elysium", "RPG", 9.99],
        ["Dragon Ball Z Kakarot", "Accion", 59.99],
        ["Persona 3", "RPG", 24.99],
        ["Commando 2", "Estrategia", 4.99],
        ["Hollow Knight", "Metroidvania", 9.99],
        ["Stardew Valley", "Gestion de recursos", 7.99],
    ];

    $nuevo_videojuego = ["Octopath Traveler", "RPG", 29.95];
    array_push($videojuegos, $nuevo_videojuego);
    array_push($videojuegos, ["Outer Wilds", "Ilusion", 19.95]);

    //unset($videojuegos[3]);

    array_push($videojuegos, ["Dota 2", "MOBA", 0]);
    array_push($videojuegos, ["Fall Guys", "Plataforma", 0]);
    array_push($videojuegos, ["Rocket League", "Deporte", 0]);
    array_push($videojuegos, ["Lego Fornite", "Battle Royale", 0]);
    for ($i=0; $i < count($videojuegos) ; $i++) { 
        if ($videojuegos[$i][2] == 0) {
            $videojuegos[$i][3] = "No";
        }else {
            $videojuegos[$i][3] = "Si";
        }
        

    }
    $_titulo = array_column($videojuegos, 0);
    //$_categoria = array_column($videojuegos, 1);
    //$_precio = array_column($videojuegos, 2);

    //si fuera descendente, SROT_DESC

   array_multisort($_titulo, SORT_ASC, $videojuegos);
    $_titulo = array_column($videojuegos, 0);
    $_categoria = array_column($videojuegos, 1);
    $_precio = array_column($videojuegos, 2);
    array_multisort($_categoria, SORT_ASC,
                    $_precio, SORT_DESC,
                    $_titulo, SORT_DESC,
                    $videojuegos);
    ?>
    <table>
        <thead>
            <tr>
                <th>Videojuego</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Paga el niño?</th>
            </tr>
        </thead>
        <tbody>
            <?php
            asort($videojuegos);
            foreach ($videojuegos as $videojuego) {
                //print_r($videojuego);
                //echo $videojuego[0];
                //echo "<br><br>";
                list($titulo, $categoria, $precio, $pago) = $videojuego;
                echo "<tr>";
                echo "<td>$titulo</td>";
                echo "<td>$categoria</td>";
                echo "<td>$precio</td>";
                echo "<td>$pago</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>