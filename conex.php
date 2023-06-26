<?php

$conn = mysqli_connect($servername= "127.0.0.1", $username="root",
$password="", $database="macro_system");

if (!$conn) {
die("Error de Conexion Con la Base de Datos".mysqli_connect_error());
}

?>