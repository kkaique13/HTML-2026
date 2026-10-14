<html>
    <head>
        <title>Exercício 18</title>
    </head>
    <body>
        <h1>Soma dos pares entre 1 a 500</h1>
        <?php
            $SOMA = 0;
            for ($i = 1; $i <= 500; $i++){
                if ($i % 2 == 0){
                    $SOMA += $i;
                }
            }
            echo "<p>A soma dos números pares entre 1 a 500 é: $SOMA.</p>"
        ?>
        <p><a href="index.php">Voltar ao início</a></p>
    </body>
</html>