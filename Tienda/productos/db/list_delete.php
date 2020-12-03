<?php
<<<<<<< HEAD
    $id_producto = $_GET['id_producto'];

    $db= new SQLite3("../../tienda.db");

    $db->exec("DELETE FROM productos where id_producto = '$id_producto';");
=======
    $id_producto = $_GET[ "id_producto" ];

    $db = new SQLite3("../../tienda.db");

    $db->exec("DELETE FROM productos where id_productos='$id_productos';");
>>>>>>> 7958bfe4344ae0645d0351188f7d40d3484c8c0f

    header("Location: ../index.php");
?>