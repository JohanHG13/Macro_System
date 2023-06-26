<?php

include_once "../conex.php";

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$query = "SELECT * FROM usuario  WHERE correo='$correo' and contraseña='$contraseña'";
$result = $conn->query($query);
$row=$result->fetch_assoc();

if ($result->num_rows>0) {  
    session_start();
        $_SESSION['correo']= $correo;
        $_SESSION['rol'] = $row['id_rol'];
        header('Location: ../iniciomodulos.php');

         
} else {

    echo 'Su correo o  contraseña son incorrectos';
          
} 