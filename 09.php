<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form acton="#" method="Post">
            <label for="num1">Numero 01</label>
            <input name="num1">
            <label for="num2">Numero 2</label>
            <input name="num2">
            
            
            <button type="submit">Enviar</button>
            
        </form>
        <?php
        
        $num= $_POST['num1'];
        $num2= $_POST['num2'];
        
       $div = $num1/$num2;
        
        $quadrado = $num1 * $num1;
        
        $cubo = $num2 * $num2 * $num2;
        
        echo "O valor da divisão é: $div <br>";
        
        echo "O quadrado desse número é: $quadrado <br>";
        
        echo "O cubo desse numero é: $cubo <br>";
        
       
        ?>
    </body>
</html>

