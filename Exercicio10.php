<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 10</title>
    </head>
    <body>
       <form action="#" method="POST">
        <label for="salario">salário</label>
        <input type="number" name="salario">
        <label for="pr">Prestação</label>
        <input type="number" name="pr">
       </form>
        <?php
        $salario = filter_input($_POST['salario']);
        $prestacao = filter_input($_POST['pr']);
        $credito = $res;
                
        if($prestacao>0.20){
           $res = ($prestacao*100)/$salario;
          
            echo"Empréstimo não pode ser concedido";
        }
        if ($prestacao == 0.20) {
           $res = ($pretacao*100)/$salario;
            
            echo"Emprestimo em análise";
        }
        
        elseif($prestacao < 0.20) {
          $res = ($pretacao*100)/$salario;
           
           echo "Empréstimo concedido";
           
        }
        
       ?> 
    </body>
</html>