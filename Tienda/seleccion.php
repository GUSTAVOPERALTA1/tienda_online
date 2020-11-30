<?php
    $db = new SQLite3("tienda.db");
    $resultado = $db->query("SELECT * FROM productos");
    while ($row = $resultado->fetchArray()) {
        $id_producto= $row['id_producto'];
        $producto = $row['producto'];
        $precio = $row['precio'];
        $existencia = $row[ 'existencia'];

        
        $seleccion= " 
            <select>
            <option> iD=$id_producto, PRODUCTO=$producto, $$precio, EXISTENCIA=$existencia </option>
            </select>";
        print($seleccion);
    }
?>