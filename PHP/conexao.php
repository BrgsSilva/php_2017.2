<?php
#constante para caminho do servidor
define("HOST", "localhost");

#constante para longin de usuário
define("USER", "root");

#constante para a senha do usuário
define("PASSWORD", "");

#constante para o banco de dados do usuário
define("DATABASE", "cms_php");

#constante para a porta  de comunicação do servidor
define("PORT", "3306");


function getConnection(){
    
    $link = mysqli_connect(HOST, USER, PASSWORD, DATABASE, PORT);
    
    mysqli_set_charset($link, "utf8");
    return $link;
}



