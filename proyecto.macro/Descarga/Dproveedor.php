<?php

require_once "../conex.php";

header('Content-Type: application/xls ');
header('Content-Disposition: attachment; filename=Proveedores.xls');

?>
<table >
            <tr>
            <th>Proveedor</th>
            <th>Correo</th>
            <th>Telefono</th> 
            </tr>  
<br>
    <?php 
        $sql = "SELECT * FROM proveedores";
        $rta= $conn->query($sql);  
        if ($rta = $conn -> query($sql) ){
            while ($row = $rta -> fetch_array()){
                ?>
                
                <tr>
                <td><?php echo $row["nombreP"];?></td>
                <td><?php echo $row["correoP"];?></td>
                <td><?php echo $row["telefonoP"];?></td>
                </tr>
                
                <?php  }
                $rta -> free ();
                }     
                ?>
            </table> 