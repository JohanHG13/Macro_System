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
<form action=""style="margin-top:15%" class="ali">
<?php

include_once "../conex.php";

$id_producto = $_POST["id_producto"];
$nom_producto = $_POST["nom_producto"];
$tipo=$_POST['tipo'];
$descripcion = $_POST["descripcion"];
$marca = $_POST["marca"];

 

$sql ="INSERT INTO productos (id_producto,nom_producto,tipo, descripcion, marca)
values ('$id_producto', '$nom_producto','$tipo', '$descripcion','$marca ')";

if (mysqli_query($conn, $sql) ){
echo "<h3>registro exitoso</h3>";
}else{
echo"</h3>error de registro</h3>".mysqli_connect_error($conn);
}
?>
<br>
<a href="producto.php" class="btn btn-warning ">Regresar</a>
</body>
</form>
</html>
