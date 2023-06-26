<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="../css/estilos.css">
    <link href="../css/bootstrap.min.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="../js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <title>Actualizar</title>

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
            <a href="Proveedores.php">Regresar</a>
        </nav>
    </table>
</header>

<body>
    
<?php

    include_once "../conex.php";
    $nombreP = $_GET['nombreP'];
    $sql = "SELECT * FROM proveedores WHERE nombreP ='$nombreP'";
    $rta= $conn->query($sql);
    $row = $rta->fetch_array();

?>

<div class="container">
        <div class="ali">
            <h3 style= "margin-top:5%">Actualizar</h3>
        </div>

    </div> 

<form  method= "post" action="ActuPro.php" autocomplete= "off">

  <div class ='row'>
    <table class = 'table table-dark table-striped'>
    <tr>
    <th>Proveedor</th>
    <th>correo</th>
    <th>Telefono</th>
    </tr>
    <tr>
    <div class="col-sm-10">
      <td><input type="hidden" class="form-control" id="nombreP" name="nombreP" placeholder="nombreP" value="<?php echo $row['nombreP']?>" ></td>
    </div>
    <div class="col-sm-10 ">
      <td><input type="email" class="form-control" id="correoP" name="correoP" placeholder="correoP" value="<?php echo $row['correoP']?>"></td>
    </div>
    <div class="col-sm-10 ">
      <td><input type="number" class="form-control" id="telefonoP" name="telefonoP" placeholder="telefonoP" value="<?php echo $row['telefonoP']?>"></td>
    </div>
    </tr>
    </table>

    <input type="submit" value="Actualizar" class="btn btn-warning col-1">


</form>
</body>
</html>