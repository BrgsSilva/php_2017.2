<?php

require_once './conexão.php';

function getContatos(){
    
    #definir a variavel de conexão  
    $link = getConnection();
    
    #query  de consulta (lista) para a tabela   
    $query = "select * from contact";
    
    #envio da query e recebimento do resultado
    $result = mysqli_query($link, $query);
    
    #definir lista(array) de contatos
    $contactList = array();
    
    #carregar o array com os dados do banco
    while($contact = myslqi_fetch_assoc($result)) {
        
        #insere  o resultado no array
        array_push($contactList, $contact);
    }
    
    #retorna o array carregado com os contatos
    
    return $contactList;
    
}

#função para lista um contato específico

function getContato($id){
    $link = getConnection();
    $query ="select *from contact where id = $id";
    $result = msqli_query($link, $query);
    $contact = mysqli_fetch_assoc($result);
    return $contact;
    
}



function setContato($name, $email, $message){
    
    $link = getConnection();
    
    $query  = "insert  into contact values(null, {'$name'}, {'$email'}, {'$message})";
    
    if(mysqli_query($link, $query)){
        return true;
    }
    return false;
}

#função atualiza contato
function atualizarContato( $id, $name, $email, $message){
    
    $link = getConnection();
    
    $query  = "update contact set contact_name = '{$name}', contact_email = '{$email}', contact_message = '{$message}' where id= $id";
    
    if(mysqli_query($link, $query)){
        return true;
    }
    return false;
}

#função excluir contato
function excluiContato( $id, $name, $email, $message){
    
    $link = getConnection();
    
    $query  = "delete from contact where id= $id";
    
    if(mysqli_query($link, $query)){
        return true;
    }
    return false;
}