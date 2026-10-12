<html>
    <head>
        <title>Exercício 8</title>
    </head>
    <body>
        <h1>Valores divisíveis por 2 ou 3</h1>
        <?php
            $A = 2;
            $B = 3;
            $C = 5;
            $divisiveis = [];
            if ($A % 2 == 0 || $A % 3 == 0) {
                $divisiveis[] = $A;
            }
            if ($B % 2 == 0 || $B % 3 == 0) {
                $divisiveis[] = $B;
            }
            if ($C % 2 == 0 || $C % 3 == 0) {
                $divisiveis[] = $C;
            }
        ?>
        <p>Valores informados:</p>
        <ul>
            <li>A: <?=$A?></li>
            <li>B: <?=$B?></li>
            <li>C: <?=$C?></li>
        </ul>
        <p>Valores divisíveis por 2 ou 3:</p>
        <p><?=implode(', ', $divisiveis)?></p>
        <a href="index.php">Voltar ao início</a>
    </body>
</html>