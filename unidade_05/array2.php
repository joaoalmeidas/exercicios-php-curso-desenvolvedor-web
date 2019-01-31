<?php
    $agenda = array(    "nome" => "Bruno",
                        "sobrenome" => "Cortês",
                        "salario" => 95435.45
                    );
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
            <?php
                print_r($agenda);
            ?>
        </pre>
        <p>
            <?php
                echo $agenda[0];
            ?>
        </p>
    </body>
</html>