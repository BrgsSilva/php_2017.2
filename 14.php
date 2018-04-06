 <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form acton="#" method="Post">
            <label for="salario">salario </label>
            <input name="salario">
            
            
            
            <button type="submit">Enviar</button>
            
        </form>
        <?php
        
        $salario= $_POST['salario'];
  
        
        $reajuste = $salario + ($salario *0.05);
        

        
        
        echo "o valor atual é: $reajuste"
       
        ?>
    </body>
</html>