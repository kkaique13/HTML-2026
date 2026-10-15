<html>
    <head>
        <title>Exercício 26</title>
    </head>
    <body>
        <h1>Números quadrados em outro vetor</h1>
        <?php
            $A = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
        ?>
        <p>Vetor A: <?=implode(", ", $A)?></p>

        <?php
            $B = [];
            for ($i = 0; $i < count($A); $i++){
                $B[] = $A[$i]**2;
            }
        ?>
        <p>Vetor B: <?=implode(", ", $B)?></p>
        
        <p><a href="index.php">Voltar ao início</a></p>
    </body>
</html>