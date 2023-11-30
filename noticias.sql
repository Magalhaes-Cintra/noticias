create database noticias;
use noticias;

create table cadastro (
	nome varchar(30),
    senha varchar(11)
);

//cadastro do editor
insert into cadastro values ('israel', 'lucania');

select * from cadastro;

drop table cadastro
