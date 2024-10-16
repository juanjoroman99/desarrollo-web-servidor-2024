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
        $animus = [
            ["Dragon Ball Daima","Shonen"],
            ["One piece","Shounen"],
            ["Jojo no Kimi no Aboken","Seinen"],
            ["Monsters","Seinen"],
            ["Goblin Slayer","Isekai"],
            ["Dungeon Meshi","Shonen"],
            ["Dan Dadan","Shonen"],
        ];
        unset($animus["Dragon Ball Daima"]);
        
        array_push($animus,["Death Parade","Isekai"]);
        array_push($animus,["Kagurabachi","Shonen"]);
        for ($i=0; $i < count($animus); $i++) { 
            $animus[$i][2] = rand(1990,2030);

            if ($animus[$i][2] < 2024) {
                $animus[$i][4] = "Ya disponible";
            } else {
                $animus[$i][4] = "Proximamente";
            }
         }
         for ($i=0; $i <count($animus) ; $i++) { 
            $animus[$i][3] = rand(1,99);
         }

         

         $_titulo = array_column($animus, 0);
         $_genero = array_column($animus, 0);
         $_anio = array_column($animus, 0);
        

        array_multisort($_genero, SORT_ASC, $_anio, SORT_DESC, $_titulo, SORT_ASC);
    ?>
    <table>
        <caption>Animes</caption>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Genero</th>
                <th>Año</th>
                <th>Episodios</th>
                <th>Disponibilidad</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($animus as $animu) {
                list($titulo, $genero, $anio, $episodios, $disponible) = $animu;?>
               <tr>
                <td><?php echo $titulo?></td>
                <td><?php echo $genero?></td>
                <td><?php echo $anio?></td>
                <td><?php echo $episodios?></td>
                <td><?php echo $disponible?></td>
               </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>