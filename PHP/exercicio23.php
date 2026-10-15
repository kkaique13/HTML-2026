<html>
    <head>
        <title>Exercício 23</title>
    </head>
    <body>
        <h1>Nomes em uma matriz</h1>
        <?php
            $A = ["Maria", "José", "Kaíque", "Mário", "João", "Matheus", "Gabriel", "LeBron", "Guilherme", "Michele"];
        ?>
        
        <ol>
        <?php
            for ($i = 0; $i < count($A); $i++){
                echo "<li>$A[$i]</li>";
            }
        ?>
        </ol>

        <p><a href="index.php">Voltar ao início</a></p>
    </body>
</html>