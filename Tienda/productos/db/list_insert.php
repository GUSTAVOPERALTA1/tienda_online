<?php
    $producto = $_GET[ 'producto' ];
    $precio = $_GET[ 'precio' ];
    $existencia = $_GET[ 'existencias' ];

    $db = new SQLite3( '../../tienda.db' );

    $db->exec("INSERT INTO productos (producto, precio, existencias) VALUES ('$producto', '$precio', '$existencia' );");
    
    header("Location: ../index.php");

?>