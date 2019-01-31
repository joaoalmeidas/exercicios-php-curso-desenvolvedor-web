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
            $gremio = array("Marcelo Grohe", "Pedro Geromel", "Kannemann", "Maicon");
            
            foreach($gremio as $jogador){
                echo $jogador ."<br>";
            }
        ?>
    </body>
</html>