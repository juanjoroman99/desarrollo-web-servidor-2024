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
    /**
     * TODOS LOS ARRAYS EN PHP SON ASOCIATIVOS, COMO LOS MAP DE JAVA
     * 
     * TIENEN PARES CLAVE-VALOR
     */

     $numeros = [2,3,4,7,2,4];
     $numeros = array(6,10,7,3,8,2);
     print_r($numeros); #PRINT RELATIONAL

     echo "<br><br>";

     $animales = ["Perro","Gato","Ornitorrinco","Suricato","Capibara"];
     $animales = [
        "A01" => "Perro",
        "A02" => "Gato",
        "A03" => "Ornitorrinco",
        "A04" => "Suricato",
        "A05" => "Capibara",
     ];
     #print_r($animales);
    echo("<p>" . $animales["A03"] . "</p>");

    $animales[2] = "Koala";
    $animales[6] = "Iguana";
    $animales["A01"] = "Elefante";
    array_push($animales, "Morsa", "Foca");
    $animales[] = "Ganso";
    unset($animales[1]);

    /**
     * 4321 tdz => Audi TT
     * 1122 fff => Mercedes CLR
     * 
     * Crear el array con 3 coches
     * añadir 2 coches con sus matriculas
     * añadir 1 coche sin matricula
     * borrar el coche sin matricula
     * resetear las claves y almacenar el resultado en otro array
     * 
     */

     $coches = [
        "3954 PWN" => "Nissan GTR",
        "7341 KMW" => "Honda Civic",
        "3455 PRN" => "Ferrari 355",
        "2723 MSD" => "Ford Mustang",
        "8326 TYN" => "Lamborhini Urus",
        "0273 KMÑ" => "Fiat Multipla",

     ];
     array_push($coches, "Peugeot 407sw");
     //print_r($coches);
     unset($coches[0]);
     //print_r($coches);
     //print_r(array_values($coches));
     echo "<h3>Lista de animales con FOR</h3>";
     $animales = array_values($animales);
     echo("<ol>");
     for ($i=0; $i < count($animales) ; $i++) { 
        echo("<li>" . $animales[$i] . "</li>");
     }
     echo("</ol>");

     echo"<h3>Lista con animales pero con while</h3>";
     echo "<ol>";
     $i = 0;
     while ($i < count($animales)) {
        echo"<li>" . $animales[$i] . "</li>";
        $i++;
     }
     echo "</ol>";

     echo "<ol>";
     foreach ($coches as $coche) {
        echo "<li>$coche</li>";
     }
     echo "</ol>";
     echo "<ol>";
     foreach ($coches as $matricula => $coche) {
        echo"<li>$matricula, $coche</li>";
     }
     echo "</ol>";
    ?>
    <table>
        <caption>Coches</caption>
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Coche</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($coches as $matricula => $coche){?>
                <tr>
                    <td><?php echo $matricula ?></td>
                    <td><?php echo $coche ?></td>
                </tr>   
                <?php } ?>
        </tbody>
    </table>
    <!-- 
    Ejercicio 1

    Desarrollo web entorno servidor => Alejandra
    Desarrollo web entorno cliente => Jose de la junta
    Diseño de interfaces web => Jose de la junta
    Despliegue => Jaime Lannister
    Empresa e iniciativa emprendedora => Andrea
    Ingles => Virginia

    Mostrarlo todo en una tabla
    -->
    <?php
    $asignaturas = [
        "Desarrollo web entorno servidor" => "Alejandra",
        "Desarrollo web entorno cliente" => "Jose de la junta",
        "Diseño de interfaces web" => "Jose de la junta",
        "Despliegue" => "Jaime Lannister",
        "Empresa e iniciativa emprendedora" => "Andrea",
        "Ingles" => "Virginia",
    ]
    ?>
    <table>
        <caption>MEDAC</caption>
        <thead>
            <tr>
                <th>Asignatura</th>
                <th>Profesor</th>
            </tr>
        </thead>
        <tbody>
            <?php
            asort($asignaturas);
            foreach($asignaturas as $asignatura => $profesor){?>
                <tr>
                    <td><?php echo $asignatura ?></td>
                    <td><?php echo $profesor ?></td>
                </tr>   
                <?php } ?>
        </tbody>
    </table>
    <!-- 
    Ejercicio 2
    Francis => 3
    Aurora => 10
    Luis => 7
    Samuel => 9

    Mostrar en una tabla con 3 columnas
    - COLUMNA 1: ALUMNO
    - COLUMNA 2: NOTA
    - COLUMNA 3: SI NOTA < 5 APROBADO ELSE SUSPENSO

    -->
    <?php
    $notas = [
    "Francis" => 3,
    "Aurora" => 10,
    "Luis" => 7,
    "Samuel" => 9,
    "Anni" => 8,
    "Juanjo" => 4,
    ]
    ?>
    <table>
        <caption>NOTAS</caption>
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Nota</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            asort($notas);
            foreach($notas as $alumno => $nota){?>
                <tr class="<?php if($nota < 5)echo "suspenso";
                    else echo "aprobado"; ?>">
                    <td><?php echo $alumno ?></td>
                    <td><?php echo $nota ?></td>
                    <?php if ($nota < 5) {
                        echo "<td>suspenso</td>";
                    }
                    elseif ($nota > 6 and $nota < 9) {
                        echo "<td>notable</td>";
                    }elseif ($nota > 4 and $nota < 7) {
                        echo "<td>aprobado</td>";
                    }else {
                        echo "<td> Sobresaliente</td>";
                    }
                    ?>
                </tr>   
                <?php } ?>
        </tbody>
    </table>
</body>
</html>