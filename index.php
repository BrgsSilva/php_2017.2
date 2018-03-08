<!DOCTYPE html>
<!--
    Autor: Bergson
    Data:08-03-18
Finalidade: Projeto de aprendizado PHP
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula3</title>
    </head>
    <body>
        <?php
            # Quando queremos definir uma variável devemos utilizar o símbolo $
            $variavel = "Variavel Exemplo";
            
            # Porém. quando queremos definir uma variavel de variável utilizamos a smbologia
            $$variavel = 8; 
            
            echo "O valor da $variavel é " . $$variavel;
            echo"<br>O valor da $variavel é {$$variavel}";
            echo"<br>";
            var_dump(boolval(0));
            echo"<br>";
            var_dump(boolval(1));
        ?>
    </body>
</html>
