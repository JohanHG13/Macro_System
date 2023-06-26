<?php

require_once "../conex.php";

header('Content-Type: application/xls ');
header('Content-Disposition: attachment; filename=Clientes.xls');

?>
<table>
        <tr>
        <th>id_rol</th>
        <th>id_cliente</th>
        <th>correo</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>contraseña</th>
        <th>Telefono</th>
        <th>direccion</th>
        <th>fecha_nacimiento</th>
        </tr>

<br>
    <?php  
        require_once "../conex.php";
        $sql = "SELECT * FROM usuario where id_rol=2";
        $rta= $conn->query($sql);
        if ($rta = $conn -> query($sql) ){
            while ($row = $rta -> fetch_array()){
                ?>
                
    <tr>
    <td><?php echo $row["id_rol"];?></td>
    <td><?php echo $row["id_usuario"];?></td>
    <td><?php echo $row["correo"];?></td>
    <td><?php echo $row["nombre"];?></td>
    <td><?php echo $row["apellido"];?></td>
    <td><?php echo $row["contraseña"];?></td>
    <td><?php echo $row["telefono"];?></td>
    <td><?php echo $row["direccion"];?></td>
    <td><?php echo $row["fecha_nacimiento"];?></td>
    </tr>
                
        <?php  }
        $rta -> free ();
        }     
        ?>
</table>   