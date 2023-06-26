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
    <title>Resgistro Ventas</title>

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
            <a href="ventas.php">Regresar</a>
        </nav>
    </table>
</header>

<body>
<?php

include_once "../conex.php";

$id_venta = $_GET['id_venta'];

$sql = "SELECT * FROM ventas WHERE id_venta ='$id_venta'";
$rta= $conn->query($sql);
$row = $rta->fetch_array();

?>
<div class="container">
        <div class="ali">
            <h3 style= "margin-top:5%">Actualizar Venta</h3>
        </div>

    </div> 

<form  action="ActuVen.php"  method= "post" >

<div class ='row'>
    <table class = 'table  table-striped'>
        <tr>
            <th>fecha</th>
            <th>hora</th>
            <th>Precio</th>
            <th>Cantidad</th>
            </tr>
        <div class="col-sm-10 ">
            <td><input type="number" class="form-control" name="valor" placeholder="valor"  value="<?php echo $row['valor']?>"></td>
        </div>
        <div class="col-sm-10 ">
            <td><input type="number" class="form-control" name="cantidad_venta" placeholder="cantidad_venta"  value="<?php echo $row['cantidad_venta']?>"></td>
        </div>
        <input type="hidden" class="form-control"  name="id_venta"  value="<?php echo $row['id_venta']?>">
        <input type="hidden" class="form-control"  name="id_cliente" value="<?php echo $row['id_cliente']?>">
        <input type="hidden" class="form-control"  name="id_producto"  value="<?php echo $row['id_producto']?>">
        <div class="col-sm-10 ">
          <td><input type="date" class="form-control"  name="fecha_venta"  placeholder="Fecha"  value="<?php echo $row['fecha_venta']?>"></td>
        </div>
        <div class="col-sm-10">
          <td><input type="time" class="form-control"  name="hora" placeholder="Hora"  value="<?php echo $row['hora']?>"></td>
        </div>
        
        </tr>
        </table>
        <br>
        <table class = 'table  table-striped'>
        
        </table> 
        <table class = 'table  table-striped'> 
        <tr>
            <th>descuento</th>
            <!--<th>forma_pago</th>-->
            <th>valor total</th>
        </tr>
        <div class="col-sm-10 ">
            <td><input type="number" class="form-control"name="descuento" placeholder="descuento"  value="<?php echo $row['descuento']?>"></td>
        </div>
        <!--<div class="col-sm-10 ">
            <td><select  class="form-control">
                <option selected disabled value="">Forma de pago</option>
                <option value="">credito</option>
                <option value="">debito</option>
                <option value="">paypal</option>
              </select></td>
        </div>-->
        <div class="col-sm-10 ">
            <td><input type="number" class="form-control" name="valor_total" placeholder="valor_total"  value="<?php echo $row['valor_total']?>"></td>
        </div> 
        </table>
    </div>     
    <br>
    <input type="submit" value="Actualizar" class="btn btn-primary col-2">


</form>
</body>
</html>