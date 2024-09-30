<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista con while</h1>
    <?php
    $i = 1;
    echo "<ul>";
    while ($i <= 10) {
        echo "<li>$i</li>";
        $i++;
    }
    echo "</ul>";
    while ($i <= 10):
        echo "<li>$i</li>";
        $i++;
    endwhile;
    ?>
   <h1>Lista con FOR</h1>
   <?php
   echo("<ul>");
        for($i = 0; $i <= 10 ; $i++):
            echo("<li>$i</li>");
        endfor;
    echo("</ul>");
   ?>
   <h1>Lista con FOR con BREAK</h1>
   <?php
   echo("<ul>");
        for($i = 0; ; $i++):
            echo("<li>$i</li>");
            if($i >= 10):
                break;
            endif;
        endfor;
    echo("</ul>");
   ?>
</body>
</html>