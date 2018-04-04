<!DOCTYPE html>
<!--
Exercício 2
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício2</title>
    </head>
    <body>
    <fildset>
        <legend>Formulario</legend>
        <form action="#" method="post">
            <label for="distancia_">Distancia</label>
            <input type="number name='distancia" id="distancia_">
            <label for="litros_">Litros</label>
            <input type="number" name="litros" id="litros_">
            <button type="submit">Enviar</button>
        </form>
    </fildset>   
            
    <!--codigo PHP-->
      <?php
       if(isset($_POST['distancia']) && isset($_POST['litros'])){
           $distancia= $_POST['distancia;'];
           $litos= $_POST['litros'];
           
           #ConsumoMédio = Distancia / LitrosdeCombustivelConsumido
           
           $consumo= $distancia / $litros;
           
           echo "O consumo foi: $consumo";
       }
        ?>
    </body>
</html>