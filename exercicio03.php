<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 03</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="numero">Numero</label>
        <input type="number" name="numero">
        <label for="multiplo">multiplo</label>
        <input type="number" name="multiplo">
       </form>
        <?php
        $numero = $_POST['numero'];
        $multiplo = $_POST['multiplo'];
        
        if($numero%$multiplo ==0)
            echo "Esses numeros são múltiplos";
        
         else
            echo "Esses números não são multiplos";
        
        
       ?> 
    </body>
</html>