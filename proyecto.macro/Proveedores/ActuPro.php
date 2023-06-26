<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="css/bootstrap.esm.min.js"></script>
    <title>Actualizacion</title>
</head>
<header>
    <table>
        <a href="#" class="logo">
        <img src="../img/logo.jpg"  alt="#">
        </a>
    </table>

</header>
<form action="" style="margin-top:15%" class="ali">
<?php

include_once "../conex.php";

$nombreP = $_POST['nombreP'];
$correoP = $_POST['correoP'];
$telefonoP = $_POST['telefonoP'];
 

$sql ="UPDATE proveedores SET correoP='$correoP', nombreP='$nombreP'telefonoP= '$telefonoP' WHERE nombreP='$nombreP'";
$rta= $conn-> query($sql);

 if($conn->query($sql)) {
    echo '<h3>actualizado con éxito</h3>';
  } else {
    echo '<h3>Hubo un error al actualizar : ' . $conexion->error . '</h3>';
  }
?>
<a href="Proveedores.php" class="btn btn-warning col-1">Regresar</a>
</form>
</html>
