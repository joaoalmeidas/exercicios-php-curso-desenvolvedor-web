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
            $salada = array("Maçã", "Abacate", "Laranja");
        
            echo "Existe o elemento? ". in_array("Laranja", $salada) ."<br>";
            echo array_search("Laranja", $salada) ."<br>";
        ?>
        
    </body>
</html>