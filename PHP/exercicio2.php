<html>
    <head>

    </head>
    <body>
        <h1>Módulo de um número</h1>
        <?php
            $N = -2;
            if ($N < 0){
                $res = $N * -1;
            }
            else{
                $res = $N;
            }
        ?>
        <p>Número lido: <?=$N?></p>
        <p>Módulo dele: <?=$res?></p>
        <a href="index.php">Voltar ao início</a>
    </body>
</html>