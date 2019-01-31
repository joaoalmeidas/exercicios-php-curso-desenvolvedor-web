<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $a = 5;
            $b = 8;
            
            if($a > $b){
                echo "A é maior que B.<br>";
            }else{
                echo "B é maior ou igual a A.<br>";
            }
        
            $fumante = true;
            if($fumante){
                echo "Não poderá entrar";
            }
        ?>
    </body>
</html>