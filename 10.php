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
        
        
       $div = ($num1%$num1)/2;
       
       echo "O valor é: $div";
       
        ?>
    </body>
</html>