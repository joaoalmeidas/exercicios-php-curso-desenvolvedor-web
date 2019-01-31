<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            date_default_timezone_set('America/Sao_Paulo');
            $agora = getdate();
            setlocale((LC_TIME), "pt_BR");
        
            $ano = strftime('%Y');
            $mes = strftime('%B');
            $dia = strftime('%d');
            $dia_da_semana = strftime('%A');
        
            $hora = strftime('%H');
            $minuto = strftime('%M');
            $segundo = strftime('%S');
        
            echo $dia ." de ". $mes ." de ". $ano ."<br>";
            echo $hora .":". $minuto .":". $segundo ."<br>";
            echo "Dia da semana: ". $dia_da_semana;
            
        ?>
    </body>
</html>