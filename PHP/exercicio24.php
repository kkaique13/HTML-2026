<html>
    <head>
        <title>Exercício 24</title>
    </head>
    <body>
        <h1>Números multiplicados por 3 em um vetor</h1>
        <?php
            $A = [1, 2, 3, 4, 5, 6, 7, 8];
        ?>
        <p>Vetor A: <?=implode(", ", $A)?>
        <?php
            $B = [];
            for ($i = 0; $i < count($A); $i++){
                $B[] = $A[$i] * 3;
            }
        ?>
        <p>Vetor B: <?=implode(", ", $B)?></p>
        
        <p><a href="index.php">Voltar ao início</a></p>
    </body>
</html>