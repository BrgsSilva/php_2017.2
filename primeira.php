<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Hello World</title>
    </head>
    <body>
       <h1>Minha primeira página em PHP com código básico "Olá Mundo"</h1>
       <code>
         <!-- para iniciarmos um bloco de código PHP usamos as Tags abaixo-->
         <?php
                #para declararmos  uma variável  é necessário usa o símbolo $
                $hello= "Olá  Mundo";

                //Comando utilizad para imprimir (saída) na tela.
                echo($hello);
                /*
                Detalhes importantes:
                    
                    Em PHP  sempre será necessário iniciar uma varável com $.
                    Para  que o servidor entenda os códigos PHP os arquivos devem ser salvos com extesão .php.

                */
            ?> 
        </code>      
    </body>
</html>      