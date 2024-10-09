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
        $peliculas = [
            ["Kárate a muerte en Torremolinos", "Accion", 1975],
            ["Sharknado 1-5", "Accion", 2015],
            ["Pricesa por sorpresa 2", "Comedia", 2008],
            ["Temblores 4", "Terror", 2018],
            ["Cariño he encogido a los niños", "Aventuras", 2001],
            ["Sturart", "Infantil", 2000],
        ];
        /**
         * AÑADIR CON UN RAND LA DURACION DE UNA PELICULA,
         * LA DURACION SERA UN NUMERO RANDOM ENTRE 30 Y 240
         * 
         * AÑADIR COMO UNA NUEVA COLUMNA EL TIPO DE PELICULA EL TIPO SERA:
         * -CORTOMETRAJE, SI LA DURACION ES MENOR QUE 60,
         * -LARGOMETRAJE, SI LA DURACION ES MAYOR QUE 60
         * 
         * MOSTRAR EN OTRA TABLA TODAS LAS COLUMNAS Y ORDENARLAS EN ESTE ORDE:
         * 1 GENERO
         * 2 AÑO
         * 3 TITULO(TODO ALFABETICAMENTE Y EL AÑO DE MAS RECIENTE A MAS ANTIGUO)
         */
        
         for ($i=0; $i <count($peliculas) ; $i++) { 
            $peliculas[$i][3] = rand(30,240);

            if($peliculas[$i] < 60) $peliculas[$i][4] = "Cortometraje";
            else $peliculas[$i][4] = "Largometraje";
         }

         $_titulo = array_column($peliculas, 0);
         $_genero = array_column($peliculas, 0);
         $_anio = array_column($peliculas, 0);

        array_multisort($_genero, SORT_ASC, $_anio, SORT_DESC,$_titulo, SORT_DESC);
    ?>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Año</th>
                <th>Duracion</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($peliculas as $pelicula) {
                list($titulo, $categoria, $anio, $duracion, $tipo) = $pelicula;?>
               <tr>
                <td><?php echo $titulo?></td>
                <td><?php echo $categoria?></td>
                <td><?php echo $anio?></td>
                <td><?php echo $duracion?></td>
                <td><?php echo $tipo?></td>
               </tr>
            <?php } ?>
        </tbody>
    </table>
</body>