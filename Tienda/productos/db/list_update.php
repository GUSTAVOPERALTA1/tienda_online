<?php

    $id_producto = $_GET['id_producto'];
    $producto = $_GET['producto'];
    $precio = $_GET['precio'];
    $existencia = $_GET['existencias'];

    $db = new SQLite3('../../tienda.db');
    $db->exec("UPDATE productos SET producto='$producto', precio='$precio', existencias='$existencia' WHERE id_producto='$id_producto';");
    header("Location: ../index.php");

?>
