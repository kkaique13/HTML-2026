<html>
    <head>
        <title>Exercício 10</title>
    </head>
    <body>
        <h1>Par ou ímpar</h1>
        <?php
            $A = 3;
        ?>
        <p>O valor informado é: <?=$A?></p>
        <?php
            if ($A % 2 == 0){
                echo "<p>O valor informado é par</p>";
            }
            else{
                echo "<p>O valor informado é ímpar</p>";
            }
        ?>
        <a href="index.php">Voltar ao início</a>
    </body>
</html>