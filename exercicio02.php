<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 02</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="numero">Numero</label>
        <input type="number" name="numero">
       </form>
        <?php
        $numero = $_POST['numero'];
        
        if($numero %2 ==0)
            echo "Esse número é par";
        
         else
            echo "Esse número é impar"
        
        
       ?> 
    </body>
</html>