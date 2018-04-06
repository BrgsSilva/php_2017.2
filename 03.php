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
        <fieldset>
            <form action="#" method="post">
                <label for="assinatura">Assinatura</label>
                <input name="assinatura">
                <label for="impulso">Impulso</label>
                <input name="Impulso">
                <label for="fixo">Fixo</label>
                <input name="fixo">
                <label for="chamada">Celular</label>
                <input name="chamada">
                <label for="impcel">Impcel</label>
                <input name="impcel">
            </form>
        </fieldset>
        <?php
           $assinatura = $_POST['assinatura'];
           $impulsos = $_POST['impulsos'];
           $fixo= $_POST['fixo'];
           $chamada= $_POST['chamada'];
           $impcel= $_POST['impcel'];
           
           
           $conta = ('$assinatura' + ('$impulso*$fixo')+ ('$impucel*$cel'))
        ?>
    </body>
</html>
