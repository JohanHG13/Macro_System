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
         form {padding:10%; margin-left:30%}
    </style>

</head>  
<header>   
     <table>
        <a href="#" class="logo">
        <img src="../img/logo.jpg"  alt="#">
        </a>
    </table>
</header> 
<form action="">
<?php 
include_once "../conex.php";

$id_venta = $_GET['id_venta'];

$sql="DELETE FROM ventas WHERE id_venta='$id_venta'";
$rta= $conn->query($sql);

if ($rta) {
    echo "<h3>Eliminado</h3>";
    }else{
    echo"<h3>error de Eliminacion</h3>";
    }
    ?>
    <br>
    <a href="ventas.php" class="btn btn-warning">Regresar</a>
</form>
</html>