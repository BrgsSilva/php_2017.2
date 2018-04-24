<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 09</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="numero">Numerador</label>
        <input type="number" name="num">
        <label for="deno">Denominador</label>
        <input type="number" name="deno">
       </form>
        <?php
        $numerador = $_POST['num'];
        $denominador = $_POST['deno'];
        
        if($numerador%$denominador == 1){
            return true;
        }
        elseif($numerador%$numerador == 0){
             return false;
        }
           
       ?> 
    </body>
</html>