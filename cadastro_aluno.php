<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'crud.php';

#Resgatar os campos do formulário
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$telefone = $_POST['telefone'];


/* ...9linhas

  echo "Código: $codigo<br>"
  . "Nome: $nome <br>"
  . "Modelo: $modelo <br>"
  . "Ano: $ano <br>"
  . "Fabricante: $fabricante <br>"
  . "Preço: $preco<br>"
  . "Quantidade: $quantidade <br>"; */

if (isset($_POST['nome'])) {

    if (gravar($nome, $matricula, $telefone )) {
        echo 'Dados gravados com sucesso';
    } else {
        echo'Falha ao gravar os dados';
    }
} 