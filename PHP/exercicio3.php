<html>
    <head>
    </head>
    <body>
        <h1>Verificador de nota</h1>
        <?php
            $N1 = 3;
            $N2 = 4;
            $N3 = 5;
            $N4 = 2;
            $MD = ($N1 + $N2 + $N3 + $N4) / 4;
            $TEXT = '';
            if ($MD >= 5){
                $TEXT = 'Aprovado!';
            }
            else{
                $TEXT = 'Reprovado!';
            }
        ?>
        <p>Nota 1: <?=$N1?></p>
        <p>Nota 2: <?=$N2?></p>
        <p>Nota 3: <?=$N3?></p>
        <p>Nota 4: <?=$N4?></p>
        <p>Média: <?=$MD?></p>
        <p><?=$TEXT?></p>
        <a href="index.php">Voltar ao início</a>
    </body>
</html>