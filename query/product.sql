use test_tecnico_homeland;

create table producto(
id_producto int not null auto_increment,
codigo_producto int not null,
nombre varchar(100) not null,
cantidad int not null,
fotografia varchar(100),
precio double(100,2) not null,
fecha_ingreso date not null,
fecha_vencimiento date not null,
primary key(id_producto)
);