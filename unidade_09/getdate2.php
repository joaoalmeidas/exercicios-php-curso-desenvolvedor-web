<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            date_default_timezone_set('Etc/GMT+3');
            $agora = getdate();
        
            $ano = $agora["year"];
            $mes = $agora["mon"];
            $dia = $agora["mday"];
        
            $hora = $agora["hours"];
            $minuto = $agora["minutes"];
            $segundo = $agora["seconds"];
        
            echo $dia ."/". $mes ."/". $ano ."<br>";
            echo $hora .":". $minuto .":". $segundo;
            
        ?>
    </body>
</html>