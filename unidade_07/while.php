<?php
            
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $cont = 1;
            while($cont<=6){
                $sorteio = rand(1, 60);
                echo $sorteio ." ";
                $cont++;
            }
            
        ?>
    </body>
</html>