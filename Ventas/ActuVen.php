<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="../css/bootstrap.esm.min.js"></script>
    <title></title>


</head>
<body>
<header>
    <table>
        <a href="#" class="logo">
        <img src="../img/logo.jpg"  alt="#">
        </a>
    </table>

</header>
<form action="" style="padding:10%; margin-left:30%">
<body>
<?php

include_once "../conex.php";

$id_venta = $_POST["id_venta"];
$id_cliente = $_POST["id_cliente"];
$id_producto = $_POST["id_producto"];
$fecha = $_POST["fecha_venta"];
$hora = $_POST["hora"];
$valor = $_POST["valor"];
$Cantidad = $_POST["cantidad_venta"];
$descuento = $_POST["descuento"];
//$forma_pago = $_POST["forma_pago"];
$valor_total = $_POST["valor_total"];
 
$sql ="UPDATE ventas SET fecha_venta='$fecha', hora ='$hora', valor='$valor',cantidad_venta='$Cantidad', valor_total='$valor_total ', descuento='$descuento'  WHERE id_venta='$id_venta'";
 $rta= $conn-> query($sql);

 if($conn->query($sql)) {
    echo '<h3>Venta actualizada </h3>';
  } else {
    echo '<h3>Hubo un error al actualizar venta: ' . $conexion->error . '<h3>';
  }
?>
<a href="ventas.php" class="btn btn-warning ">Regresar</a>
</body>
</form>
</html>

