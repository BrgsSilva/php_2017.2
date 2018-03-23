/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  51115152017.2
 * Created: 22/03/2018
 */

/*DDLs*/
# Comando para CRIAR a base (schema) do banco de dados*/
 create database aluno;

/* Comando para SELECIONAR a base*/
use aluno;

/* Comando para CRIAR a tabela no banco de dados */
create table aluno(
    id int primary key auto_increment,
    nome varchar(50) not null,
    matricula varchar(50)not null,
    telefone varchar(50) not null,
   
);


/*DMLs*/

/* Inserir os dados no banco */

insert (nome, matriula,telefone)
into produto values (null, 'nome', 'matricula', 'telefone');
 }
}

