<html>
    <head>
        <title>Exercício 25</title>
    </head>
    <body>
        <h1>Números subtraidos de um vetor pelos de outro</h1>
        <?php
            $A = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
        ?>
        <p>Vetor A: <?=implode(", ", $A)?></p>

        <?php
            $B = [20, 19, 18, 17, 16, 15, 14, 13, 12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
        ?>
        <p>Vetor B: <?=implode(", ", $B)?></p>

        <?php
            $C = [];
            for ($i = 0; $i < count($A); $i++){
                $C[] = $A[$i] - $B[$i];
            }
        ?>
        <p>Vetor C: <?=implode(", ", $C)?></p>
                
        <p><a href="index.php">Voltar ao início</a></p>
    </body>
</html>