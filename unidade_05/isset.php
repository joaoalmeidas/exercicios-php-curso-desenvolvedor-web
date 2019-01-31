<?php
    $nome = null;
    $endereco = "Brasil";
    $telefone = "";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Se a variável está configurada? ". isset($endereco);
        ?>
    </body>
</html>