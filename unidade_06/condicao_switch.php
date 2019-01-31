<?php
    $dia = "segunda";
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            switch($dia){
                case "segunda":
                    echo "Hoje é ". $dia .", que merda hein tio!!<br>";
                    break;
                case "terça":
                    echo "Hoje é ". $dia ."<br>";
                    break;
                case "quarta":
                    echo "Hoje é ". $dia ."<br>";
                    break;
                case "quinta":
                    echo "Hoje é ". $dia ."<br>";
                    break;
                case "sexta":
                    echo "Hoje é ". $dia .", vamo dalhe meu irmão!!<br>";
                    break;
                case "sabado":
                    echo "Hoje é ". $dia ."<br>";
                    break;
                case "domingo":
                    echo "Hoje é ". $dia ."<br>";
                    break;
            }
        ?>
    </body>
</html>