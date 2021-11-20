--creacion de la base de datos
create database Web16100220;
use Web16100220;

-- creacion de la tabla usuarios
create table Usuarios
(
    ID_Usuario smallint  not null auto_increment ,
    Usuario varchar(20),
    Nombre varchar(30),
    pass varchar(30),
    primary key(ID_Usuario)

);

--creacion de la tabla operadores
create table Operadores
(
   IdOperador smallint   not null auto_increment ,
   NombreOperador varchar(30),
   ApellidoOperador varchar(30),
   Telefono varchar(10),
   NumCaja varchar(15),
   Departamento varchar(7),
   Pedimento varchar(8),
   Patente varchar(4),
   Folio int(7),
   FechaEntrada date,
   HoraEntrada Time,
   CodigoBarras int(6),
   primary key(IdOperador)
   
);

--insercion de valores a la tabla usuarios
insert into Usuarios(Usuario,Nombre,Pass)
values ('Administrador','Francisco Hernandez','Admin2021');

insert into Usuarios(Usuario,Nombre,Pass)
values ('Sistemas','Irving Jimenez','Sis2021');

insert into Usuarios(Usuario,Nombre,Pass)
values ('Gerencia','Sara Garcia','GerenAux21');

-- insercion de valores a la tabla Operadores
insert into Operadores(NombreOperador,ApellidoOperador,Telefono,NumCaja,Departamento,Pedimento,Patente,Folio,FechaEntrada,HoraEntrada,CodigoBarras)
values("Francisco","Velazquez","8671236549","MVR56","SAGARPA","78998745","1234","1347654",NOW(),NOW(),"000001");

insert into Operadores(NombreOperador,ApellidoOperador,Telefono,NumCaja,Departamento,Pedimento,Patente,Folio,FechaEntrada,HoraEntrada,CodigoBarras)
values("Rodolfo","sanchez","8671966549","AL66","SAGARPA","78998745","9898","1347664",NOW(),NOW(),"000002");

insert into Operadores(NombreOperador,ApellidoOperador,Telefono,NumCaja,Departamento,Pedimento,Patente,Folio,FechaEntrada,HoraEntrada,CodigoBarras)
values("Juan","Torres","8671277549","AF34","PROFEPA","78998745","1243","1347794",NOW(),NOW(),"000003");
