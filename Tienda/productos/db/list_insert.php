<?php
    $producto = $_GET[ 'articulo' ];
    $precio = $_GET[ 'valor' ];
    $existencia = $_GET[ 'cantidades' ];

    $db = new SQLite3( '../../tienda.db' );

    $db->exec("INSERT INTO productos (producto, precio, existencia) VALUES ('$producto', '$precio', '$existencia' );");
    
    header("Location: ../index.php");

?>