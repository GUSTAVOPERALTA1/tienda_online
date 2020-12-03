<?php
    $db = new SQLite3("tienda.db");
    $resultado = $db->query("SELECT * FROM ticket;");

     $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>ID</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>CANTIDAD</th>
                <th>PRODUCTO</th>
                <th>TOTAL</th>
            </tr>
            </thead>
            ";
    print($table);

    while ($row = $resultado->fetchArray()) {
        $id = $row[ 'id_ticket' ];
        $fecha = $row['fecha'];
        $hora = $row['hora_venta'];
        $cantidad = $row['cantidad_producto'];
        $producto = $row['producto'];
        $total = $row['total_producto'];
        $table = "
            <tr>
                <td>$id</td>
                <td>$fecha</td>
                <td>$hora</td>
                <td>$cantidad</td>
                <td>$producto</td>
                <td>$total</td>";

        print($table);
    }
 
    print("</table>");
?>