<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="../js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="../css/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Clientes</title>
    <style>
         form {margin-top:5%; margin-left: 10%; margin-right: 10%}
    </style>

</head>    
<header>   
     <table>
        <a href="#" class="logo">
        <img src="../img/logo.jpg"  alt="#">
        </a>
    </table>
    <table>
        <nav>
            <a href="../iniciomodulos.php">Inicio</a>
            <a href="../Ventas/ventas.php">Ventas</a>
            <a href="clientes.php">Clientes</a>
        </nav>
    </table>
</header>    
<body>
<?php 
        include_once "../conex.php";
        
        $where="";

        if (!empty($_POST)) {
            
            $valor = $_POST['campo'];
            if (!empty($valor)) {
                $where = " WHERE id_usuario='$valor' ";
            }
        }
        $sql = "SELECT * FROM usuario $where where id_rol=2";
        $rta= $conn->query($sql);

?>
    <div class="container">
        <div class="ali">
            <h3 style= "margin-top:5%">Clientes</h3>
        </div>

    </div>   
    <div class="row"  style="margin-top:3%">   
        <a style= "margin-left:10% " href="registroClientes.html" class = "btn btn-warning col-1">Registrar</a>
    </div>
    <br>
<form style= "margin-left:9% "class="row g-3" action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="col-auto">
        <input type="number" class="form-control form-control-sm" id="campo" name="campo" placeholder="N-°documento">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-warning mb-3  btn-sm">Buscar</button>
    </div>
</form>
<form>
    <div class ='row' style="margin-top:-5%">
        <table class = 'table table-dark table-striped'>
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
        <th>edad</th>
        <th>Actualizar</th>
        <th>Eliminar</th>
        </tr>

<br>

    <?php   
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
                <?php  

                    $fecha_nacimiento=$row["fecha_nacimiento"];
                    $dia_actual = date("Y-m-d");
                    $edad_diff = date_diff(date_create($fecha_nacimiento), date_create($dia_actual));
                    ?>
                <td><?php echo $row["edad"]=$edad_diff->format('%y');?></td>
                <td><a href="FormularioActuaCli.php?id_usuario=<?php echo  $row['id_usuario'];?>" class = "btn btn-warning">Actualizar</span></a></td>
                <td><a href="EliCli.php?id_usuario=<?php echo  $row['id_usuario'];?>" class = "btn btn-warning">Eliminar</span></a></td>
                </tr>
                
                <?php  }
                $rta -> free ();
                }     
                ?>
            </table>
            <a href="../Descarga/Dclientes.php" class=" btn btn-warning col-1">Descargar</a>   
        </div>   
</form>   
</body>
</html>