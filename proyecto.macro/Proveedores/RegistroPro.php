<?php

include_once "../conex.php";

$nombreP = $_POST["nombreP"];
$correoP = $_POST["correoP"];
$telefonoP = $_POST["telefonoP"];
 
$sql ="INSERT INTO proveedores ( correoP, nombreP, telefonoP)
values ('$correoP', '$nombreP','$telefonoP')";

if (mysqli_query($conn, $sql)){
echo "registro exitoso";
}else{
echo"error de registro".mysqli_connect_error($conn);
}