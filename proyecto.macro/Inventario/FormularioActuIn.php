<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="../css/estilos.css">
    <link href="../css/bootstrap.min.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="/bootstrap.min.js"></script>
    <title>Actualizacion </title>

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
            <a href="Inventario.php">Regresar</a>
        </nav>
    </table>
</header>

<body>
<?php

include_once "../conex.php";

$id_flujo = $_GET['id_flujo'];

$sql = "SELECT * FROM inventario WHERE id_flujo ='$id_flujo'";
$rta= $conn->query($sql);
$row = $rta->fetch_array();

?>
<div class="container">
        <div class="ali">
            <h3 style= "margin-top:5%">Actualizar Producto</h3>
        </div>

    </div> 

<form  action="ActuInve.php"  method= "post" >

<div class ='row'>
    <table class = 'table  table-dark table-striped'>
        <tr>
            <th>id_producto</th>
            <th>Proveedor</th>
            <th>Fecha</th>
            </tr>
        <div class="col-sm-10 ">
            <td><input type="text" class="form-control" name="id_producto" placeholder="id_producto"  value="<?php echo $row['id_producto']?>"></td>
        </div>
        <div class="col-sm-10 ">
            <td><input type="text" class="form-control" name="nombreP" placeholder="nombreP"  value="<?php echo $row['nombreP']?>"></td>
        </div>
        <input type="hidden" class="form-control"  name="id_flujo"  value="<?php echo $row['id_flujo']?>">
        <div class="col-sm-10 ">
          <td><input type="date" class="form-control"  name="fecha_entrada"  placeholder="fecha_entrada"  value="<?php echo $row['fecha_entrada']?>"></td>
        </div> 
        </table>
        <br>
        <table class = 'table  table-dark table-striped'>
            <tr>
                <th>Medida</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
        <div class="col-sm-10 ">
            <td><input type="text" class="form-control"  name="medida" placeholder="medida"  value="<?php echo $row['medida']?>"></td>
        </div>
        <div class="col-sm-10">
            <td><input type="number" class="form-control" name="cantidad_entrada" placeholder="cantidad_entrada"  value="<?php echo $row['cantidad_entrada']?>"></td>
        </div>
        </div>
        <div class="col-sm-10 ">
          <td><input type="number" class="form-control"  name="precio_entrada"  placeholder="precio_entrada"  value="<?php echo $row['precio_entrada']?>"></td>
        </div> 
        </table>
    </div>     
    <br>
    <input type="submit" value="Actualizar" class="btn btn-warning col-2">


</form>
</body>
</html>