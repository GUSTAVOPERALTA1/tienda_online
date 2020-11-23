CREATE TABLE productos(
    id_producto integer PRIMARY KEY AUTOINCREMENT,
    producto varchar(50) NOT NULL,
    precio int(20),
    existencias int(20)
);
CREATE TABLE tickets(
    id_ticket integer PRIMARY KEY AUTOINCREMENT,
    fecha date,
    hora_venta time,
    cantidad_producto int(20),
    producto varchar(50) NOT NULL,
    total_producto int(100)
);

INSERT INTO productos(producto, precio) values("Papas fritas","13");
INSERT INTO productos(producto, precio) values "Crema","24");


