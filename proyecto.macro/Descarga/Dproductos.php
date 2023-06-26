<?php

require_once "../conex.php";

header('Content-Type: application/xls ');
header('Content-Disposition: attachment; filename=Productos.xls');

?>
<table>
            <tr>
            <th>Id Producto</th>
            <th>Nombre Producto</th>
            <th>Tipo</th>
            <th>Descripcion</th>
            <th>Marca</th>
            </tr>  

<br>
    <?php 
        $sql = "SELECT * FROM productos ";
        $rta= $conn->query($sql);  
        if ($rta = $conn -> query($sql) ){
            while ($row = $rta -> fetch_array()){
                ?>
                
                <tr>
                <td><?php echo $row["id_producto"];?></td>
                <td><?php echo $row["nom_producto"];?></td>
                <td><?php echo $row["tipo"];?></td>
                <td><?php echo $row["descripcion"];?></td>
                <td><?php echo $row["marca"];?></td>
                </tr>
                
                <?php  }
                $rta -> free ();
                }     
                ?>
            </table>   