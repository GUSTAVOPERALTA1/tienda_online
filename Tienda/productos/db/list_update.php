<?php

    $id_producto = $_GET['id_producto'];
    $producto= $_GET['producto'];
    $precio = $_GET['precio'];
<<<<<<< HEAD
    $existencia = $_GET[ 'existencia'];

    $db = new SQLite3('../../tienda.db');
    $db->exec("UPDATE productos SET producto='$producto', precio='$precio', existencia= '$existencia' WHERE id_producto='$id_producto';");
    header("Location: ../index.php");
    
?>
=======
    $existencia = $_GET['existencias'];

    $db = new SQLite3('../../tienda.db');
    $db->exec("UPDATE productos SET producto='$producto', precio='$precio', existencias='$existencia' WHERE id_producto='$id_producto';");
    header("Location: ../index.php");

?>
>>>>>>> 7958bfe4344ae0645d0351188f7d40d3484c8c0f
