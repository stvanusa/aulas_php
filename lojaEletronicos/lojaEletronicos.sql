create database lojaEletronicos;

use lojaEletronicos;

create table produto(
   id int primary key,
   produto varchar(45) not null,
   preco decimal(10,2) not null,
   quantidade int not null,
   fornecedor_id int not null,
   foreign key (fornecedor_id) references fornecedor(id)
   );

create table fornecedor(
   id int primary key,
   nome varchar(45) not null,
   telefone varchar(12) not null,
   endereco varchar(45) not null
   );

create table clientes(
   id int primary key,
   nome varchar(45) not null,
   email varchar(45)not null,
   telefone varchar(15) not null
   );

create table vendas(
   id int primary key,
   dataVenda date not null,
   quantidadeVendida int not null,
   valorTotal decimal(10,2) not null,
   produtos_id int not null,
   foreign key (produtos_id) references produtos(id),
   clientes_id int not null,
   foreign key (clientes_id) references clientes(id)
   );

create table produtos_vendas(
   idprodutos_vendas int primary key,
   produtos_id int not null,
   foreign key (produtos_id) references produtos(id),
   vendas_id int not null,
   foreign key (vendas_id) references vendas(id)
   );


insert into fornecedor(id,nome,telefone,endereco) values(001,'Fornecedor A','08632176204','Rua das Flores');

insert into fornecedor(id,nome,telefone,endereco) values(002,'Fornecedor B','08632176809','Rua dos Rios');

insert into fornecedor(id,nome,telefone,endereco) values(003,'Fornecedor C','08632179090','Rua Lima Filho');


insert into produto(id,produto,preco,quantidade,fornecedor_id) values(1111,'teclado','35,00',01,1);

insert into produto(id,produto,preco,quantidade,fornecedor_id) values(2222,'fone','25,00',01,2);

insert into produto(id,produto,preco,quantidade,fornecedor_id) values(3333,'monitor','65,00',02,3);

insert into produto(id,produto,preco,quantidade,fornecedor_id) values(4444,'mouse','35,00',02,1);

insert into produto(id,produto,preco,quantidade,fornecedor_id) values(5555,'tablet','235,00',02,3);


insert into clientes(id,nome,email,telefone) values(100,'Maria Silva','maria@gmail.com','08634345050');

insert into clientes(id,nome,email,telefone) values(200,'Pedro Lima Silva','pedrolima@gmail.com','08634344440');

insert into clientes(id,nome,email,telefone) values(300,'Paulo Silva','paulo@gmail.com','08634308989');

insert into clientes(id,nome,email,telefone) values(400,'Bruna Silva','bruna@gmail.com','08634331319');

insert into clientes(id,nome,email,telefone) values(500,'Vanusa Santos','vanusaa@gmail.com','08634356569');


update produto set preco = 30.00 where id = 2222;

delete from produto where produto = 'fone';

insert into vendas (id,dataVenda,quantidadeVendida,ValorTotal,produtos_id,clientes_id) values (8888,'2024-11-04',1,'65,00',3333,500);

show databases;

