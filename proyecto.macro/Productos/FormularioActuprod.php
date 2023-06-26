<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="../css/estilos.css">
    <link href="css1/bootstrap.min.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="/bootstrap.min.js"></script>
    <title>Actualizacion Producto</title>

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
            <a href="producto.php">Regresar</a>
        </nav>
    </table>
</header>

<body>
<?php

include_once "../conex.php";

$id_producto = $_GET['id_producto'];

$sql = "SELECT * FROM productos WHERE id_producto ='$id_producto'";
$rta= $conn->query($sql);
$row = $rta->fetch_array();

?>
<div class="container">
        <div class="ali">
            <h3 style= "margin-top:5%">Actualizar Producto</h3>
        </div>

    </div> 

<form  action="ActuProd.php"  method= "post" >

<div class ='row'>
    <table class = 'table  table-dark table-striped'>
        <tr>
            <th>Nombre Producto</th>
            <th>TIPO</th>
            </tr>
        <input type="hidden" class="form-control"  name="id_producto"  value="<?php echo $row['id_producto']?>">
        <div class="col-sm-10 ">
            <td><input type="text" class="form-control" name="nom_producto" placeholder="nom_producto"  value="<?php echo $row['nom_producto']?>"></td>
        </div>
        <div class="col-sm-10 ">
            <td><input type="text" class="form-control" name="tipo" placeholder="tipo"  value="<?php echo $row['tipo']?>"></td>
        </div>
        </table>
        <br>
        <table class = 'table  table-dark table-striped'>
        <tr>
        <th>Descripcion</th>
        <th>Marca</th>
        </tr>
        <div class="col-sm-10 ">
            <td><input type="text" class="form-control"name="descripcion"  placeholder="descripcion"  value="<?php echo $row['descripcion']?>"></td>
        </div>
        <div class="col-sm-10">
          <td><input type="text" class="form-control"  name="marca" placeholder="marca"  value="<?php echo $row['marca']?>"></td>
        </div>
        </table>
    </div>     
    <br>
    <input type="submit" value="Actualizar" class="btn btn-warning col-2">


</form>
</body>
</html>