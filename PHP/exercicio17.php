<html>
    <head>
        <title>Exercício 17</title>
    </head>
    <body>
        <h1>Soma dos 100 primeiros números naturais</h1>
        <?php
            $SOMA = 0;
            for ($i = 1; $i <= 100; $i++){
                $SOMA += $i;
            }
            echo "A soma dos 100 primeiros números naturais é: " . $SOMA;
        ?>
        <p><a href="index.php">Voltar ao início</a></p>
    </body>
</html>