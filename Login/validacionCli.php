<?php

    session_start();

    $rol_permitido=[2];

    if(!array_key_exists('rol', $_SESSION) || !in_array($_SESSION['rol'], $rol_permitido)){

          header('Location: login.html'); 
        
    }
?>