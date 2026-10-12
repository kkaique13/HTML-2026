<html>
    <head>
        <title>Exercício 11</title>
    </head>
    <body>
        <h1>Faixa de 1 a 9</h1>
        <?php
            $A = 10;
        ?>
        <p>O valor informado é: <?=$A?></p>
        <?php
            if ($A >= 1 && $A <= 9){
                echo "<p>O valor informado está na faixa permitida</p>";
            }
            else{
                echo "<p>O valor informado não está na faixa de permitida</p>";
            }
        ?>
        <a href="index.php">Voltar ao início</a>
    </body>
</html>