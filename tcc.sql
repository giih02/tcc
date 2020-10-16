Create DATABASE tcc;

Use tcc;

Create table funcionarios(
id_fun Int auto_increment primary key,
nome_fun varchar(50) not null,
data_contratacao varchar(10) not null,
nascimento_fun varchar(10) not null,
cargo varchar(25) not null,
crm varchar(10) not null,
salario varchar(10) not null,
cpf_fun varchar(20) not null,
rg_fun varchar(20) not null,
telefone varchar(15) not null,
email_fun Varchar (50) not null, 
senha_fun Varchar (32) not null
);
SELECT * FROM funcionarios;
#drop table funcionarios;

UPDATE funcionarios
SET crm = '87456123'
WHERE id_fun = 6;

Create table usuario(
Id Int auto_increment primary key,
nome Varchar (50) Not Null, 
cpf Varchar (20) Not Null, 
rg Varchar (20) Not Null,
nascimento varchar(10) Not Null,
sexo char(1) Not Null,
email Varchar (50) Not Null, 
senha Varchar (32) Not Null,
token char(32)
);
SELECT * FROM usuario;
#drop table usuario;

Create table endereco(
Id Int auto_increment primary key,
telefone varchar(15)not null,
cep Varchar(15) Not Null, 
endereco Varchar (50) Not Null, 
bairro Varchar (50) Not Null, 
cidade Varchar (50) Not Null, 
estado Varchar (50) Not Null,
numero varchar(6)not null
);
SELECT * FROM endereco;
#drop table endereco;

Create table triagem(
Id Int auto_increment primary key,
rg Varchar(20) Not Null, 
dataTriagem varchar(10)not null,
peso Varchar(8) Not Null, 
altura Varchar (8) Not Null, 
imc Varchar (50) Not Null, 
TSanguineo char (3) Not Null,
medicacao Varchar (100), 
doenca varchar(100),
alergia varchar(100),
fumante boolean,
bebida boolean
);
SELECT * FROM triagem;
#drop table triagem;


Create table exames2(
Id Int auto_increment primary key,
rg Varchar (20) Not Null,
data Varchar (12) Not Null,
nomeM Varchar (35) Not Null,
codM Varchar (11) Not Null,
sangue boolean,
urina boolean,
fezes boolean,
outros varchar(100)
);
SELECT * FROM exames2;
#drop table exames2;

Create table perfil(
Id Int auto_increment primary key,
rg Varchar(20) Not Null, 
codigo varchar(10),
data varchar(20),
img longblob
);

SELECT * FROM perfil;
#drop table perfil;

Create table medico(
Id Int auto_increment primary key,
nome varchar(30), 
crm varchar(8), 
especialidade varchar(25)
);
SELECT * FROM medico;
#insert into medico (nome,crm,especialidade) values ("Rogerio",12345678,"Clinico geral");

Create table agendaMedico(
Id Int auto_increment primary key,
id_med varchar(8), 
segunda boolean,
seg_hora varchar(27),
terca boolean,
ter_hora varchar(27),
quarta boolean,
qua_hora varchar(27),
quinta boolean,
qui_hora varchar(27),
sexta boolean,
sex_hora varchar(27)
);
 SELECT * FROM agendaMedico;
#drop table agendaMedico;
#insert into agendaMedico(id_med,dia,hora) values (1,"Segunda,terça,quarta","8:00,9:00,10:00");

UPDATE consultas SET cod_pac = '1,1,1,0,0,1,1,0,1,0,1,1' WHERE id = '1';

Create table consultas(
Id Int auto_increment primary key,
cod_med varchar(15), 
cod_pac varchar(15),
dia varchar(15),
hora varchar(6)
);
 SELECT * FROM consultas;
#drop table consultas;

DELETE FROM consultas
WHERE Id = 6;

insert into consultas(cod_med,cod_pac,dia,hora) values (87456123,455,"Sexta-feira","15:50");

Create table anotacoes(
Id Int auto_increment primary key,
rg Varchar(20) Not Null, 
Dconsulta varchar(10)not null,
nomeM Varchar(50) Not Null, 
reclamacoes Varchar (100) Not Null, 
considerações Varchar (100) Not Null, 
medicamentos Varchar (100) Not Null
);
SELECT * FROM anotacoes;
#drop table anotacoes;
