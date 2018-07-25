create schema if not exists aula19;

use aula20;

create table if not exists cliente(

	id int not null unique,
	nome varchar(255) not null,
	primary key(id)
);

create table if not exists telefone(
	id int not null unique,
	cid int not null,
	numero varchar(15) not null,
	foreign key(cid) references cliente(id)
);