<html>
    <head>
        <title>Exercício 13</title>
    </head>
    <body>
        <h1>Soma e mostrar só se for maior ou igual a 100</h1>
        <?php
            $A = 40;
            $B = 50;
            $SOMA = $A + $B;
        ?>
        <ul>
            <li>Valor 1: <?=$A?></li>
            <li>Valor 2: <?=$B?></li>
        </ul>
        <?php
            if ($SOMA >= 100){
                echo "<p>A soma dos valores é: $SOMA</p>";
            }
            else{
                echo "<p>A soma dos valores é menor que 100.</p>";
            }
        ?>
        <a href="index.php">Voltar ao início</a>
    </body>
</html>