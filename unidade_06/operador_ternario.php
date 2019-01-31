<?php
    $idade = 17;
    $maioridade = "";
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $maioridade = ($idade > 17)? "de maior" : "de menor";
            
            echo $maioridade;
        ?>
        
       
    </body>
</html>