<?php
<<<<<<< HEAD
    $producto = $_GET[ 'articulo' ];
    $precio = $_GET[ 'valor' ];
    $existencia = $_GET[ 'cantidades' ];
=======
    $producto = $_GET[ 'producto' ];
    $precio = $_GET[ 'precio' ];
    $existencia = $_GET[ 'existencias' ];
>>>>>>> 7958bfe4344ae0645d0351188f7d40d3484c8c0f

    $db = new SQLite3( '../../tienda.db' );

    $db->exec("INSERT INTO productos (producto, precio, existencias) VALUES ('$producto', '$precio', '$existencia' );");
    
    header("Location: ../index.php");

?>