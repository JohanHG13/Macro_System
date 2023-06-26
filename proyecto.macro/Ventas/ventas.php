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
    <title>Ventas</title>
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
            <a href="../Clientes/clientes.php">Clientes</a>
        </nav>
    </table>
</header>    
<body>
    <div class="container">
        <div class="ali">
            <h3 style= "margin-top:5%">Ventas</h3>
        </div>
    <?php 
        include_once "../conex.php";

        $where="";

        if (!empty($_POST)) {
            
            $valor = $_POST['campo'];
            if (!empty($valor)) {
                $where = " WHERE id_cliente='$valor' ";
            }
        }

        $sql = "SELECT * FROM ventas $where";
        $rta = $conn->query($sql);

    ?>
    </div>
    
       
    <div class="row " style="margin-top:3%">   
        <a style= "margin-left:10% " href="venta.html" class = "btn btn-warning col-1">Realizar Venta</a>
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
            <table class = 'table  table-dark table-striped'>
            <tr>
            <th>id_venta</th>
            <th>id_cliente</th>
            <th>id_producto</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Valor Total</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
            </tr>

<br>
    <?php   
        if ($rta = $conn -> query($sql) ){
            while ($row = $rta -> fetch_array()){
                ?>
                <tr>
                <td><?php echo $row["id_venta"];?></td>
                <td><?php echo $row["id_cliente"];?></td>
                <td><?php echo $row["id_producto"];?></td>
                <td><?php echo $row["fecha_venta"];?></td>
                <td><?php echo $row["hora"];?></td>
                <td>$<?php echo $row["valor"];?></td>
                <td><?php echo $row["cantidad_venta"];?></td>
                <td>$<?php echo $row["valor_total"]= $row["cantidad_venta"]*$row["valor"];?></td>
                <td><a href="FormularioActuVen.php?id_venta=<?php echo  $row['id_venta'];?>"  class = "btn btn-warning">Actualizar</span></a></td>
                <td><a href="EliVen.php?id_venta=<?php echo  $row['id_venta'];?>"  class = "btn btn-warning ">Eliminar</span></a></td>
                </tr>
                
                <?php  }
                $rta -> free ();
                }     
                ?>
            </table> 
            <a href="../Descarga/Dventas.php"  class = "btn btn-warning col-1 ">Descargar</a>  
        </div>   
</form>   
</body>
</html>
