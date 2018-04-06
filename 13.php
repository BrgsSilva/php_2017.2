<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form acton="#" method="Post">
            <label for="num1">Numero </label>
            <input name="num1">
            
            
            
            <button type="submit">Enviar</button>
            
        </form>
        <?php
        
        $num= $_POST['num1'];
  
        
        $reajuste = $num *0.10;
        
        
        echo "o valor atual é:$reajuste"
       
        ?>
    </body>
</html>
