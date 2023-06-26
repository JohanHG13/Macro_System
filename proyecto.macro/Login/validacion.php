<?php
    session_start();
    $rol_adm=[1];
    
    if(!array_key_exists('rol', $_SESSION) || !in_array($_SESSION['rol'], $rol_adm)){
        
        header('Location: inicio.php'); 
    }

?>

