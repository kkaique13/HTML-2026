<html>
    <head>
        <title>Exercício 9</title>
    </head>
    <body>
        <h1>Maior e menor</h1>
        <?php
            $A = 2;
            $B = 3;
            $C = 5;
            $D = 6;
            $E = 1;
            $maior = max($A, $B, $C, $D, $E);
            $menor = min($A, $B, $C, $D, $E);
        ?>
        <p>Valores informados:</p>
        <ul>
            <li>A: <?=$A?></li>
            <li>B: <?=$B?></li>
            <li>C: <?=$C?></li>
            <li>D: <?=$D?></li>
            <li>E: <?=$E?></li>
        </ul>
        <p>Maior valor: <?=$maior?></p>
        <p>Menor valor: <?=$menor?></p>
        <a href="index.php">Voltar ao início</a>
    </body>
</html>
