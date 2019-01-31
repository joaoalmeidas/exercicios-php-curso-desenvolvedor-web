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
            $gremio = array(
                "goleiro" => "Marcelo Grohe",
                "zagueiro1" => "Pedro Geromel",
                "zagueiro2" => "Kannemann"
            );
        
            foreach($gremio as $posicao => $jogador){
                echo $posicao ." - ". $jogador ."<br>";
            }
        ?>
    </body>
</html>