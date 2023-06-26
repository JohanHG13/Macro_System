<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="../js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="../bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Proveedores</title>
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
            <a href="../Inventario/Inventario.php">Inventario</a>
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
                $where = " WHERE nombreP='$valor' ";
            }
        }
        $sql = "SELECT * FROM proveedores $where";
        $rta= $conn->query($sql);

    ?>
    <div class="container">
        <div class="ali">
            <h3 style= "margin-top:5%">Proveedores</h3>
        </div>

    </div>  
    <br>
    <br> 
    <div class="row">   
        <a style= "margin-left:10% " href="proveedor.html" class = "btn btn-warning col-2">Registrar Proveedor</a>
    </div>
    <br>
<form style= "margin-left:9% "class="row g-3" action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="col-auto">
        <input type="text" class="form-control form-control-sm" id="campo" name="campo" placeholder="Nombre">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-warning mb-3  btn-sm">Buscar</button>
    </div>
</form>    
<form>
    
        <div class ='row' style="margin-top:-5%">
            <table class = 'table table-dark table-striped'>
            <tr>
            <th>Proveedor</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Actualizar</th>
            <th>Eliminar</th>    
            </tr>  
<br>
    <?php   
        if ($rta = $conn -> query($sql) ){
            while ($row = $rta -> fetch_array()){
                ?>
                
                <tr>
                <td><?php echo $row["nombreP"];?></td>
                <td><?php echo $row["correoP"];?></td>
                <td><?php echo $row["telefonoP"];?></td>
                <td><a href="FormularioActuP.php?nombreP=<?php echo  $row['nombreP'];?>"   class = "btn btn-warning">Actualizar</span></a></td>
                <td><a href="EliPro.php?nombreP=<?php echo  $row['nombreP'];?>"  class = "btn btn-warning">Eliminar</span></a></td>
                </tr>
                
                <?php  }
                $rta -> free ();
                }     
                ?>
            </table> 
            <a href="../Descarga/Dproveedor.php" class=" btn btn-warning col-1">Descargar</a>    
        </div>   
</form>   
</body>
</html>
