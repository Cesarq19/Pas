DROP table IF EXISTS usuario CASCADE;
drop table IF EXISTS poliza CASCADE;
drop table IF EXISTS tipo CASCADE;

create table usuario (
    id serial,
    nombre VARCHAR(255) not null,
    apellido VARCHAR(255) not null,
    email VARCHAR(180) not null,
    clave varchar(255) not null,
    estado varchar(1) not null,
    roles json,
    constraint pk_usuario primary key(id)
);

create table tipo (
    id serial,
    nombre varchar(255) not null,
    estado varchar(1) not null,
    constraint pk_tipo primary key(id)
);

create table poliza (
    id serial,
    numeroPoliza VARCHAR(255) not null,
    tipoPoliza int,
    fechaInicio date not null,
    fechaFin date not null,
    estado varchar(1) not null,
    constraint pk_poliza primary key(id),
    constraint fk_tipo foreign key(tipoPoliza) references tipo(id)
);

insert into tipo(nombre, estado) values ("Seguro de vida", "A");
insert into tipo(nombre, estado) values ("Seguro de salud", "A");
insert into tipo(nombre, estado) values ("Seguro de auto", "A");
insert into tipo(nombre, estado) values ("Seguro de hogar", "A");
