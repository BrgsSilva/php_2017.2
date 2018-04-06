<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#" method="Post">
            <label for="n1">Numero1</label>
            <input name="n1">
            <label for="n2">Numero2</label>
            <input name="n2">
            <label for="n3">Numero3</label>
            <input name="n3">
            <label for="n4">Numero4</label>
            <input name="n4">
            
        </form>
        <?php
             $num1= $_POST['num1'];
             $num2= $_POST['num2'];
             $num3= $_POST['num3'];
             $num4= $_POST['num4'];
             
             $média=((num1*1) + (num2*2) + (num3*3) + (num4*4))/1+2+3+4
        ?>
    </body>
</html>
