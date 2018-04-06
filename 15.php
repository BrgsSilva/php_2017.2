 <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form acton="#" method="Post">
            <label for="salario">Salario </label>
            <input name="salario">
            
            
            
            <button type="submit">Enviar</button>
            
        </form>
        <?php
        
        $salario= $_POST['salario'];
  
        
        $salarioliquido = $salario -($salario * 0.08);
        
        
        echo "o salario liquido é:$salarioliquido";
       
        ?>
    </body>
</html>