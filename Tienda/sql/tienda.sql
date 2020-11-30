create table productos(
    id_producto integer primary key autoincrement,
    producto varchar(30) not null,
    precio int(10) not null,
    existencia int(10) not null);

insert into productos (producto, precio, existencia) values(
('Crema','24','50'));

create table ticket(
    id_ticket integer primary key  autoincrement,
    fecha date not null,
    hora_venta date time not null,
    cantidad_producto int(20),
    producto varchar(20),
    total_producto int(20)); 