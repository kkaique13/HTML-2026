<html>
    <head>
        <title>Exercício 6</title>
    </head>
    <body>
        <h1>Ordem crescente de 3 números</h1>
        <?php
            $A = 5;
            $B = 2;
            $C = 0;
            if (($A > $B) and ($A > $C)){
                if ($B > $C){
                    echo "Ordem crescente: $C, $B, $A";
                }
                else{
                    echo "Ordem crescente: $B, $C, $A";
                }
            }
            else if (($B > $A) and ($B > $C)){
                if ($A > $C){
                    echo "Ordem crescente: $C, $A, $B";
                }
                else{
                    echo "Ordem crescente: $A, $C, $B";
                }
            }
            else if (($C > $A) and ($C > $B)){
                if ($A > $B){
                    echo "Ordem crescente: $B, $A, $C";
                }
                else{
                    echo "Ordem crescente: $A, $B, $C";
                }
            }
        ?>
        <p>Valor A: <?=$A?></p>
        <p>Valor B: <?=$B?></p>
        <p>Valor C: <?=$C?></p>
        
        <a href="index.php">Voltar ao início</a>
    </body>
</html>