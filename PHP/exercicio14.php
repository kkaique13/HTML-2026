<html>
    <head>
        <title>Exercício 14</title>
    </head>
    <body>
        <h1>Dobrar o número e mostrar o resultado se for maior que 30</h1>
        <?php
            $NUM = 20;
        ?>

        <p>Valor: <?=$NUM?></p>

        <?php
            if ($NUM * 2 > 30){
                echo "<p>O dobro do valor é: ".($NUM * 2)."</p>";
            }
            else{
                echo "<p>O dobro do valor é menor ou igual a 30.</p>";
            }
        ?>

        <a href="index.php">Voltar ao início</a>
    </body>
</html>