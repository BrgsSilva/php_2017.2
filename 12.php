<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form acton="#" method="Post">
            <label for="real">Real</label>
            <input name="real">
            
            
            
            <button type="submit">Enviar</button>
            
        </form>
        <?php
        
        $real= $_POST['real'];
    
        $valor = ($real * 3);
        
        echo "A quantia em dolar é: $valor";
        
        
       
       
        ?>
    </body>
</html>
