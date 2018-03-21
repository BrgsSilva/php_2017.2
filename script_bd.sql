/* 
 * Arquivo com estrutura de banco de dados.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Bergson
 * Created: 20/03/2018
 */

# Comando para CRIAR a base (schema) do banco de dados
create database aula06;

# Comando para SELECIONAR a base
useaula06;

# Comando para CRIAR a tabela no banco de dados
create database produto(
    id int primary key auto_increment
    codigo varchar(50) not null;
    nome varchar(50)not null;
    modelo varchar(50) not null,
    ano int not null,
    fabricante varchar(255) not null,
    preco double not null,
    quantidade int not null
);


