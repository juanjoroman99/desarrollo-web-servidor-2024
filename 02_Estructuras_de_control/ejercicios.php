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
    usando while e if

    Ejecicio3: Calcular la suma de los numeros pares entre 1 y 20

    Ejercicio4: Calcular el factorial de & con while
    -->
<?php
    
?>
</body>
</html>