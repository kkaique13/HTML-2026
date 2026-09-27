<html>
    <head>
    </head>
    <body>
        <h1>Verificador de notas + Recuperação</h1>
        <?php
            $N1 = 3;
            $N2 = 4;
            $N3 = 5;
            $N4 = 2;
            $MD1 = ($N1 + $N2 + $N3 + $N4) / 4;
            $TEXT = '';
            $REC = '';
            if ($MD1 >= 5){
                $TEXT = 'Aprovado!';
            }
            else{
                $TEXT = 'Reprovado!';
                $NE = 4;
                $MD2 = ($MD1 + $NE) / 2;
                if ($MD2 >= 5){
                    $REC = 'Aprovado em exame!';
                }
                else{
                    $REC = 'Reprovado!';
                }
            }
        ?>
        <p>Nota 1: <?=$N1?></p>
        <p>Nota 2: <?=$N2?></p>
        <p>Nota 3: <?=$N3?></p>
        <p>Nota 4: <?=$N4?></p>
        <p>Média: <?=$MD1?></p>
        <p><?=$TEXT?></p>

        <p>Nota em exame: <?=$NE?></p>
        <p>Nova média: <?=$MD2?></p>

        <p><?=$REC?></p>
        <a href="index.php">Voltar ao início</a>
    </body>
</html>