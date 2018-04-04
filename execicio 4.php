<html>
    <head>
        <meta charset="UTF-8">
        <title>Questão 6</title>
    </head>
    <body>
        <form action="#" method="POST">
        <input type="text" name="carros"> 
        </form>      
        <?php
        $salriofix = 800;
        $com = 300;
        $carros= $_POST['carros'];
        $total= $salario + ($com*$carros);
        
        echo $total
        ?>
    </body>
</html>