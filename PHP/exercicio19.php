<html>
    <head>
        <title>Exercício 19</title>
    <body>
        <h1>Números ímpares de 0 a 20</h1>
        <ul>
        <?php
            for ($i = 0; $i <= 20; $i++){
                if ($i % 2 != 0){
                    echo "<li>$i</li>";
                }
            }
        ?>
        </ul>
        <p><a href="index.php">Voltar ao início</a></p>
    </body>
</html>