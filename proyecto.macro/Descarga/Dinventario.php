<?php

require_once "../conex.php";

header('Content-Type: application/xls ');
header('Content-Disposition: attachment; filename=Inventario.xls');

?>
 <table >
            <tr>
            <th>Id_flujo</th>
            <th>Id Producto</th>
            <th>Proveedor</th>
            <th>Fecha</th>
            <th>Cantidad</th>
            <th>Medida</th>
            <th>Precio</th>
            <th>Stock</th> 
            </tr>  

<br>
    <?php   
        if ($rta = $conn -> query($sql) ){
            while ($row = $rta -> fetch_array()){
                ?>
                
                <tr>
                <td><?php echo $row["id_flujo"];?></td>
                <td><?php echo $row["id_producto"];?></td>
                <td><?php echo $row["nombreP"];?></td>
                <td><?php echo $row["medida"];?></td>
                <td><?php echo $row["fecha_entrada"];?></td>
                <td><?php echo $row["cantidad_entrada"];?></td>
                <td><?php echo $row["precio_entrada"];?></td>
                <td><?php echo $row["Stock"];?></td>
                </tr>
                
                <?php  }
                $rta -> free ();
                }     
                ?>
            </table>   