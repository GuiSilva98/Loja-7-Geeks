create database sete_geek;
use sete_geek;
create table dados_pessoais(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome varchar(100) not null,
cpf bigint not null,
data_nasc date not null,
sexo varchar(1) not null,
telefone_res int not null,
telefone_cel int not null
);
create table dados_login(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
email varchar(100) not null,
senha varchar(30) not null
);
create table dados_entrega(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
endereco varchar(100) not null,
numero int(4) not null,
complemento varchar(50),
cep int(8) not null,
bairo varchar(40) not null,
cidade varchar(100) not null,
uf varchar(2) not null,
ponto_de_referencia varchar(120)
);
create table login_adm(
email varchar(100) not null,
senha varchar(30)
);
use sete_geek;
create table produtos(
nome_prod varchar(100) not null,
id_prod int primary key,
des_prod varchar(60) not null,
preco_prod decimal not null
);
alter table dados_login
add constraint fk_dados_pessoais
foreign key (id)
references dados_pessoais(id);

alter table dados_entrega
add constraint kf_dados_pessoais
foreign key (id)
references dados_pessoais(id);