<html>
    <head>
    </head>
    <body>
        <?php
        $num1 = 10;
        $num2 = 20;
        if ($num1 > $num2){
            $res = $num1 - $num2;
        }
        else{
            $res = $num2 - $num1;
        }
        ?>
        <h1>Soma do maior valor pelo menor</h1>
        <p>Primeiro número: <?=$num1?></p>
        <p>Segundo número: <?=$num2?></p>
        <p>O resultado é: <?=$res?></p>
        <a href="index.php">Voltar ao início</a>
    </body>
</html>