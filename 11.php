<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form acton="#" method="Post">
            <label for="num1">Numero 01</label>
            <input name="num1">
            
            
            
            <button type="submit">Enviar</button>
            
        </form>
        <?php
        
        $num= $_POST['num1'];
        
        $antecessor= ($num1-1);
        $sucessor= ($num1+1);
        
        echo "O antecessor desse numero é: $antecessor <br>";
        
        echo "O sucessor desse número é: $sucessor <br>";
        
        
       
        ?>
    </body>
</html>