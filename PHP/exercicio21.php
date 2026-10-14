<html>
    <head>
        <title>Exercício 21</title>
    </head>
    <body>
        <h1>Potências de base 3 com expoentes de 0 a 15</h1>
        <ul>
        <?php
            for ($i = 0; $i <= 15; $i++){
                $RES = 3**$i;
                echo "<li>$RES</li>";
            }
        ?>
        <p><a href="index.php">Voltar ao início</a></p>
    </body>
</html>