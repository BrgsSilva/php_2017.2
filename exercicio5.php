<html>
    
    <fieldset>
        <form action="#" method="post">
            <label for="eleitores">Eleitores</label>
            <input name="eleitores">
            <label for="brancos">Brancos</label>
            <input name="brancos">
            <label for="nulos">Nulos</label>
            <input name="nulos">
            <label for="validos">Validos</label>
            <input name="validos">
            
            <button type="submit">Enviar</button>
            <button type="reset">limpar</button>
        </form>
    </fieldset>
   <!--PHP-->
   <?php
    $eleitores= $_POST['eleitores'];
    $brancos= $_POST['brancos'];
    $nulos= $_POST['nulos'];
    $validos= $_POST['validos'];
    
    $percentualBrancos= ($brancos*100)/$eleitores;
    $percentualNulos= ($nulos*100)/$eleitores;
    $percentualValidos= ($validos*100)/$eleitores;
    
    echo "O numero de votos brancos é: $percentualBrancos<br>"; 
    echo "O numero de votos nulos é: $percentualNulos<br>"; 
    echo "O numero de votos validos é: $percentualValidos"; 
    
    ?>
</html>