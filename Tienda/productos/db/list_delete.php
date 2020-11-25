<?php
    $id_producto = $_GET[ "id_producto" ];

    $db = new SQLite3("../../tienda.db");

    $db->exec("DELETE FROM productos where id_productos='$id_productos';");

    header("Location: ../index.php");
?>