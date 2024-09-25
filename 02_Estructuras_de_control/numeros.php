<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros</title>
</head>
<body>
    <?php
        $numero = 0;
        /*
        if($numero > 0){
            echo "<p>el numero $numero es mayor que 0</p>";
        }
        if($numero < 0){
            echo "<p>el numero $numero es menor que 0</p>";
        }
        if($numero > 0):
            echo "<p>el numero $numero es mayor que 0</p>";
        endif;
        
        if($numero > 0){
            echo "<p>el numero $numero es mayor que 0</p>";
        }
         elseif ($numero == 0) {
            echo "<p>elnumero $numero es igual que 0</p>";
        }
        else{
            echo "<p>el numero $numero es menor que 0</p>";
        }
    

        if($numero > 0):
            echo "<p>el numero $numero es mayor que 0</p>";
        elseif($numero == 0):
            echo "<p>el numero $numero es igual que 0</p>";
        else:
            echo "<p>el numero $numero es menor que 0</p>";
        
        endif;
        */

        #Rangos [-10,0), [0,10], (10,20]#

        $num = -7;
        if ($num >= -10 and $num < 0):
            echo "<p>el numero $num esta en el rango [-10,0)</p>";
        elseif ($num >= 0 and $num <=10):
            echo "<p>el numero $num esta en el rango [0,10]</p>";
        elseif ($num > 10 and $num <=20):
            echo "<p>el numero $num esta en el rango (10,20]</p>";
        else:
            echo "<p>el numero $num esta fuera del rango</p>";
        endif;

        
        /*Comprobar de tres formas diferentes con
        la estructura if si el numero aleatorio
        tiene 1, 2 o 3 digitos*/ 
        $numero_aleatorio = rand(1,200);
        $digitos = 0;
        if ($numero_aleatorio < 10):
            $digitos = 1;
        elseif ($numero_aleatorio < 100 and $numero_aleatorio >= 10):
            $digitos = 2;
        elseif($numero_aleatorio > 99 and $numero_aleatorio < 1000):
            $digitos = 3;
        else:
            $digitos = "ERROR";
        endif;
        echo "<p>el numero tiene $digitos</p>";
    ?>
</body>
</html>