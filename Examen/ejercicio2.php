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
</head>
<body>
    <?php
    $primero = [];
    $segundo = [];

    for ($i=0; $i <= 5; $i++) { 
        $primero[$i] = rand(1,10);
    }
    for ($i=0; $i <= 5; $i++) { 
        $segundo[$i] = rand(10,100);
    }
    for ($i=0; $i <count($primero) ; $i++) { 
        echo ("<p> . $primero . ,</p>");
    }
    $tercero = [$primero,$segundo];
    
    ?>
</body>
</html>