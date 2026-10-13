<html>
    <head>
        <title>Exercício 12</title>
    </head>
    <body>
        <h1>Verificador de sexo</h1>
        <?php
            $NOME = "Gabriela";
            $SEXO = "F";
            if ($SEXO == "M"){
                echo "<p>Ilmo. Sr. $NOME.</p>";
            }
            else if ($SEXO == "F"){
                echo "<p>Ilma. Sra. $NOME.</p>";
            }
            else{
                echo "<p>Sexo informado inválido!</p>";
            }
        ?>
        <a href="index.php">Voltar ao início</a>
    </body>
</html>