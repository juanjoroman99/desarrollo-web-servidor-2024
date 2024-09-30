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
<?php
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

?>
 <!--
    Ejercicio2: Mostrar en una lista los numeros multiplos de 3
    usando while e if entre 1 y 100

    Ejecicio3: Calcular la suma de los numeros pares entre 1 y 20

    Ejercicio4: Calcular el factorial de 6 con while
    -->
<h2>Ejercicio 2</h2>
<ul>
<?php
    $i = 1;
    while($i <= 100):
        if($i % 3 == 0):
            echo "<li>$i</li>";
        endif;
        $i++;
    endwhile;
?>
</ul>
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
?>
<h1>Ejercicio4</h1>
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
<h1>Ejercicio5</h1>
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
     $n = 11;
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
?>
</body>
</html>