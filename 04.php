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
        <form action="#" method="Post"
        <label for="num1">Numero1</label>
        <input name="num1">
        <label for="num2">Numero02</label>
        <input name="num2">
        <label for="num3">Numero03</label>
        <input name="num3">
        <?php
           $num1 = $_POST['num1'];
           $num2 = $_POST['num2'];
           $num3 = $_POST['num3'];
           
           $media= ($num1 + $num2 + $num3)/3;
           
           echo "A média é: $média"
        ?>
    </body>
</html>
