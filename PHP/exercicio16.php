<html>
    <head>
        <title>Exercício 16</title>
    </head>
    <body>
        <h1>Tabuada de um número</h1>
        <?php
            $NUM = 2;
        ?>
        <p>Valor: <?=$NUM?></p>
        <ul>
        <?php
            for ($i = 0; $i <= 10; $i++){
                $RES = $NUM * $i;
                echo "<li>$NUM x $i = $RES</li>";
            }
        ?>
        </ul>
        <a href="index.php">Voltar ao início</a>
    </body>
</html>