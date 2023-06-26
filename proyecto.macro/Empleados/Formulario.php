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
            <a href="Empleados.php">Regresar</a>
        </nav>
    </table>
</header>

<body>
    
<?php

    include_once "../conex.php";
    $id_usuario = $_GET['id_usuario'];
    $sql = "SELECT * FROM usuario WHERE id_usuario ='$id_usuario'";
    $rta= $conn->query($sql);
    $row = $rta->fetch_array();

?>

<div class="container">
        <div class="ali">
            <h3 style= "margin-top:5%">Actualizar</h3>
        </div>

    </div> 

<form  method= "post" action="ActuEm.php" autocomplete= "off">

  <div class ='row'>
    <table class = 'table table-dark table-striped'>
    <tr>
    <th>correo</th>
    <th>nombre</th>
    <th>apellido</th>
    <th>contraseña</th>
    <th>Telefono</th>
    <th>direccion</th>
    <th>fecha_nacimiento</th>
    </tr>
    <tr>

    <div class="col-sm-10 ">
      <td><input type="email" class="form-control" id="correo" name="correo" placeholder="correo" value="<?php echo $row['correo']?>"></td>
    </div>
    <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $row['id_usuario']?>">
     <div class="col-sm-10">
      <td><input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']?>" ></td>
    </div>
    <div class="col-sm-10 ">
      <td><input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido" value="<?php echo $row['apellido']?>"></td>
    </div>
    <div class="col-sm-10 ">
      <td><input type="text" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña" value="<?php echo $row['contraseña']?>"></td>
    </div>
    <div class="col-sm-10 ">
      <td><input type="number" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']?>"></td>
    </div>
    <div class="col-sm-10 ">
      <td><input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion" value="<?php echo $row['direccion']?>"></td>
    </div>
    <div class="col-sm-10 ">
      <td><input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']?>"></td>
    </div>
    </tr>
    </table>

    <input type="submit" value="Actualizar" class="btn btn-warning col-1">


</form>
</body>
</html>