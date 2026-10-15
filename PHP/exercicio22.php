<html>
    <head>
        <title>Exercício 22</title>
    </head>
    <body>
        <h1>Potência de um número</h1>

        <?php
            $B = 2;
        ?>
        <p>Valor da base: <?=$B?></p>

        <?php
            $E = 3;
        ?>
        <p>Valor do expoente: <?=$E?></p>

        <?php
            $RES = 1;
            for ($i = 0; $i < $E; $i++){
                $RES *= $B;
            }
        ?>
        <p>Resultado: <?=$RES?></p>
        
        <p><a href="index.php">Voltar ao início</a></p>
    </body>
</html>