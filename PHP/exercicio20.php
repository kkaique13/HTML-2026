<html>
    <head>
        <title>Exercício 20</title>
    </head>
    <body>
        <h1>Números divisíveis por 4 e menores que 200</h1>
        <ul>
        <?php
            for ($i = 1; $i < 200; $i++){
                if ($i % 4 == 0){
                    echo "<li>$i</li>";
                }
            }
        ?>
        </ul>
        <p><a href="index.php">Voltar ao início</a></p>
    </body>
</html>