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
    <title></title>

</head>    
<header>   
     <table>
        <a href="#" class="logo">
        <img src="../img/logo.jpg"  alt="#">
        </a>
    </table>
</header> 
<form action="" style="padding:10%; margin-left:30%">
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


$sql ="INSERT INTO ventas ( id_cliente, id_producto, fecha_venta, hora, valor, cantidad_venta, descuento)
values ('$id_cliente','$id_producto','$fecha', '$hora', '$valor','$Cantidad','$descuento' )";

if (mysqli_query($conn, $sql)){
echo "registro exitoso";
}else{
echo"error de registro".mysqli_connect_error($conn);
}
?>
<br>

<a href="VentasCli.php" class="btn btn-warning ">Regresar</a>
</form>   
</html>