<html>
    <head>

    </head>
    <body>
        <h1>Calculadora de Equação 2º Grau</h1>
        <?php
            $A = 5;
            $B = 2;
            $C = 0;
            // Normal
            if (($A > 0) and ($B > 0) and ($C > 0)){
                echo "Equação: +$A x² + $B x + $C";
            }
            //a negativo
            else if (($A < 0) and ($B > 0) and ($C > 0)){
                echo "Equação: $A x² + $B x + $C";
            }
            //a e b negativo
            else if (($A < 0) and ($B < 0) and ($C > 0)){
                echo "Equação: $A x² $B x + $C";
            }
            //a, b e c negativo
            else if (($A < 0) and ($B < 0) and ($C < 0)){
                echo "Equação: $A x² $B x $C";
            }
            //b == 0; c positivo
            else if (($A > 0) and ($B == 0) and ($C > 0)){
                echo "Equação: $A x² + $C";
            }
            //b == 0; c negativo
            else if (($A > 0) and ($B == 0) and ($C < 0)){
                echo "Equação: $A x² $C";
            }
            //c == 0; b positivo
            else if (($A > 0) and ($B > 0) and ($C == 0)){
                echo "Equação: $A x² + $B x";
            }
            //c == 0; b negativo
            else if (($A > 0) and ($B < 0) and ($C == 0)){
                echo "Equação: $A x² $B x";
            }
            $DELTA = ($B**2) - (4 * $A * $C);
        ?>
        <p>Delta: <?=$DELTA?></p>
        <?php
            $TEXT1 = '';

            if ($DELTA < 0){
                $TEXT1 = 'Não há solução real!';
            }
            else if ($DELTA == 0){
                $X1 = (($B * -1) + ($DELTA**0.5)) / (2 * $A);

                $TEXT1 = 'Há só uma solução real!';
                echo 'Solução: '.$X1;
            }
            else if ($DELTA > 0){
                $X1 = (($B * -1) + ($DELTA**0.5)) / (2 * $A);
                $X2 = (($B * -1) - ($DELTA**0.5)) / (2 * $A);
                $TEXT1 = 'Há duas soluções reais!';
                echo '<p>Solução 1: '.$X1.'</p>';
                echo '<p>Solução 2: '.$X2.'</p>';
            }
        ?>
        <p><?=$TEXT1?></p>
        
        <a href="index.php">Voltar ao início</a>
    </body>
</html>