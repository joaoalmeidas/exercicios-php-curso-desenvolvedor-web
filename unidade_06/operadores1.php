<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $salario = 800;
            $premio = "800";
            if($salario === $premio){
                echo "Salário é identico a prêmio";
            }else{
                echo "Salário nao é identico a prêmio";
            }
        ?>
    </body>
</html>