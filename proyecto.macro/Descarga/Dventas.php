<?php

require_once "../conex.php";

header('Content-Type: application/xls ');
header('Content-Disposition: attachment; filename=Ventas.xls');

?>
<table>
            <tr>
            <th>id_venta</th>
            <th>id_cliente</th>
            <th>id_producto</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Descuento</th>
            <th>Valor_total</th>
            </tr>

<br>
    <?php 
        $sql = "SELECT * FROM ventas";
        $rta = $conn->query($sql);  
        if ($rta = $conn -> query($sql) ){
            while ($row = $rta -> fetch_array()){
                ?>
                <tr>
                <td><?php echo $row["id_venta"];?></td>
                <td><?php echo $row["id_cliente"];?></td>
                <td><?php echo $row["id_producto"];?></td>
                <td><?php echo $row["fecha_venta"];?></td>
                <td><?php echo $row["hora"];?></td>
                <td><?php echo $row["valor"];?></td>
                <td><?php echo $row["cantidad_venta"];?></td>
                <td><?php echo $row["descuento"];?></td>
                <td><?php echo $row["valor_total"];?></td>
                </tr>
                
                <?php  }
                $rta -> free ();
                }     
                ?>
            </table> 