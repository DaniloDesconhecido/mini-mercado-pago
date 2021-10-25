create database minimercadopago;
use minimercadopago;

create table usuario(
	idusuario int auto_increment primary key,
    nomeusuario varchar(45) not null,
    nome varchar(45) not null,    
    sobrenome varchar(45) not null,
    datadenascimento date not null,
    telefone int not null,
    cpf varchar(11) unique not null,
    sexo enum("M","F")
);

create table conta(
	idconta int auto_increment primary key,
    saldo double default "1000.00" not null,
    email varchar(45) unique not null,
    senha varchar(255) not null,
    idusuario int, 
    CONSTRAINT conta_usuario FOREIGN KEY (idusuario) REFERENCES usuario (idusuario) ON DELETE CASCADE
);

create table transacao(
	idtransacao int auto_increment primary key,
    datahora datetime not null,
    idconta int,
    idusuario int,
    CONSTRAINT transacao_conta FOREIGN KEY (idconta) REFERENCES conta (idconta) ON DELETE CASCADE ,
    CONSTRAINT transacao_usuario FOREIGN KEY (idusuario) REFERENCES usuario (idusuario) ON DELETE CASCADE
);

create table transferencia(
	idtransferencia int auto_increment primary key,
    tipo varchar(45) not null,
    valor DOUBLE not null,
    sucesso ENUM ('F', 'V'),
    datahora DATETIME not null,
    idtransacao int,
    CONSTRAINT transferencia_transacao FOREIGN KEY (idtransacao) REFERENCES transacao (idtransacao) ON DELETE CASCADE
);

create table endereco(
	idendereco int auto_increment primary key,
    numero int not null,
    complemento varchar(255) not null,
    nomerua varchar(255) not null,
    cep int not null,
    cidade varchar(255) not null,
    estado varchar(255) not null,
    bairro varchar(255) not null,
    idusuario int,
    CONSTRAINT endereco_usuario FOREIGN KEY (idusuario) REFERENCES usuario (idusuario) ON DELETE CASCADE
);
