<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--
    Ejercicio2: Mostrar la fecha acutal con el siguiente formato
        Viernes 27 de Septiembre de 2024
    Utilizar las estructuras de control necesarias
-->
<h1>Ejercicio1</h1>
<?php/*
    $dia = date("l");
    $dia_num = date("j");
    $dia = match ($dia) {
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miercoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sabado",
        "Sunday" => "Domingo"
    };
    
    $mes = date("F");
    $mes = match ($mes) {
        "January" => "Enero",
        "February" => "Febrero",
        "May" => "Mayo",
        "June" => "Junio",
        "July" => "Julio",
        "August" => "Agosto",
        "September" => "Septiembre",
        "October" => "Octubre",
        "November" => "Noviembre",
        "December" => "Diciembre",
    };
    $anio = date("Y");
    echo("<h1>$dia $dia_num de $mes de $anio</h1>")
*/
?>
 <!--
    Ejercicio2: Mostrar en una lista los numeros multiplos de 3
    usando while e if entre 1 y 100

    Ejecicio3: Calcular la suma de los numeros pares entre 1 y 20

    Ejercicio4: Calcular el factorial de 6 con while
    -->
<h2>Ejercicio 2</h2>
<ul>
<?php/*
    $i = 1;
    while($i <= 100):
        if($i % 3 == 0):
            echo "<li>$i</li>";
        endif;
        $i++;
    endwhile;*/
?>
<!--</ul>
<h2>Ejercicio3</h2>
<?php
    $resultado = 0;
    $i = 1;
    $suma = 0;
    /*for ($i=1; $i <= 20 ; $i+2) { 
        $resultado =$resultado + $i;
    }
    echo("<h3>$resultado</h3>");*/
    while ($i <= 20):
        if($i % 2 == 0):
            $suma += $i;
        endif;
        $i++;
    endwhile;
    echo("La suma es $suma");
?>-->
<!--<h1>Ejercicio4</h1>
<?php
    $factorial = 6;
    $resultado = 1;
    $i = 1;
    while ($i <= $factorial):
        $factorial = $factorial * $i;
        $i++;
    endwhile;
    echo("El factorial de $factorial es $resultado");
?>
-->
<!--<h1>Ejercicio5</h1>
/*Muestra por pantalla los 50 primeros numeros primos*/
<?php
    /**
     * 4 % 2 = 0   4 no es primo
     * 4 % 3 = 1
     * 
     * 5 % 2 = 1   5 si es primo
     * 5 % 3 = 2
     * 5 % 4 = 1
     * 
     */
    /* $n = 11;
     $numerosPrimos = 0;
     $esPrimo = true;
    echo("<ol>");
     while ($numerosPrimos < 50) {
        $esPrimo;
        for ($i=2; $i < $n ; $i++) { 
            if ($n % $i == 0) {
                !$esPrimo;
                break;
            }
        }
        if ($esPrimo) {
            $numerosPrimos++;
            echo("<li>$n</li>");
        }
        $n++;
     }
     echo("</ol>");
     */
?>
-->
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
            sort($asignaturas);
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
    "Francis" => "3",
    "Aurora" => "10",
    "Luis" => "7",
    "Samuel" => "9",
    "Anni" => "8",
    "Juanjo" => "4"
    ]
    ?>
    <table>
        <caption>NOTAS</caption>
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            <?php
            asort($notas);
            foreach($notas as $alumno => $nota){?>
                <tr class="<?php ?>">
                    <td><?php echo $alumno ?></td>
                    <td><?php echo $nota ?></td>
                    <?php if ($nota < 5) {
                        echo "<td class='suspenso'>suspenso</td>";
                    }
                    elseif ($nota > 6 and $nota < 9) {
                        echo "<td class='aprobado'>notable</td>";
                    }elseif ($nota > 4 and $nota < 7) {
                        echo "<td class='aprobado'>aprobado</td>";
                    }else {
                        echo "<td class='aprobado'> Sobresaliente</td>";
                    }
                    ?>
                </tr>   
                <?php } ?>
        </tbody>
    </table>
    <?php
    /**
     *Insertar dos nuevos estudiantes, con notas aleatorias entre 0 y 10
     *
     * Borrar un estudiante (el que peor os caiga) por la clave
     * 
     * Mostrar en una nueva tabla todo ordenado por los nombres alfabeticamente
     * 
     * Mostrar en una nueva tabla todo ordenado por la nota de 10 a 0 (orden inverso)
     */
    ?>
</body>
</html>