<?php

/* 
 * Arquivo responsável por receber a requisição de cadastro da página formulario.php
 */

# Inclusaõa do arquivo C.R.U.D
require_once 'crud.php'

#Resgatar os campos do formulário
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$modelo = $_POST['modelo'];
$ano = substr($_POST['ano'], 0 ,4);
$fabricante = $_POST['fabricante'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

/*...9linhas

echo "Código: $codigo<br>"
  . "Nome: $nome <br>"
  . "Modelo: $modelo <br>"
  . "Ano: $ano <br>"
  . "Fabricante: $fabricante <br>"
  . "Preço: $preco<br>"
  . "Quantidade: $quantidade <br>"; */

if(isset($POST['nome'])){
    
    if(gravar(($codigo, $nome, $modelo, $ano, $fabricante , $preco, $quantidade)){
        echo 'Dados gravados com sucesso';
    }
     else{
         echo'Falha ao gravar os dados';
    }
}
    
    
     
   

   
    
  





