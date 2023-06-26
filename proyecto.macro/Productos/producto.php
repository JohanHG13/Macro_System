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
    <title>productos</title>
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
                $where = " WHERE id_producto='$valor' ";
            }
        }
        $sql = "SELECT * FROM productos $where";
        $rta= $conn->query($sql);

?>
    <div class="container">
        <div class="ali">
            <h3 style= "margin-top:5%">Productos</h3>
        </div>

    </div>  
    <br> 
    <div class="row">   
        <a style= "margin-left:10% " href="producto.html" class = "btn btn-warning col-2">Resgistrar Producto</a>
    </div>
    <br>
<form style= "margin-left:9% "class="row g-3" action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="col-auto">
        <input type="number" class="form-control form-control-sm" id="campo" name="campo" placeholder="Id Producto">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-warning mb-3  btn-sm">Buscar</button>
    </div>
</form>    
<form>  
        <div class ='row' style="margin-top:-5%">
            <table class = 'table table-dark table-striped'>
            <tr>
            <th>Id Producto</th>
            <th>nombre Producto</th>
            <th>Tipo</th>
            <th>Descripcion</th>
            <th>Marca</th>
            <th>Actualizar</th>
            <th>Eliminar</th>    
            </tr>  

<br>
    <?php   
        if ($rta = $conn -> query($sql) ){
            while ($row = $rta -> fetch_array()){
                ?>
                
                <tr>
                <td><?php echo $row["id_producto"];?></td>
                <td><?php echo $row["nom_producto"];?></td>
                <td><?php echo $row["tipo"];?></td>
                <td><?php echo $row["descripcion"];?></td>
                <td><?php echo $row["marca"];?></td>
                <td><a href="FormularioActuprod.php?id_producto=<?php echo  $row['id_producto'];?>" class = "btn btn-warning">Actualizar</span></a></td>
                <td><a href="Eliprod.php?id_producto=<?php echo  $row['id_producto'];?>" class = "btn btn-warning">Eliminar</span></a></td>
                </tr>
                
                <?php  }
                $rta -> free ();
                }     
                ?>
            </table>   
            <a href="../Descarga/Dproductos.php" class=" btn btn-warning col-1">Descargar</a>  
        </div>   
</form>   
</body>
</html>
