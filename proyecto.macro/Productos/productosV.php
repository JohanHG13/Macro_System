<?php
 require_once "../conex.php";
 $sql = "SELECT * FROM productos ";
 $rta= $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productos</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/code.jquery.com_jquery-3.7.0.min.js">
</head>
<body>
<header>
    <table>
        <a href="#" class="logo">
        <img src="../img/logo.jpg"  alt="#">
        </a>
    </table>
    <table>
        <nav>
            <a href="../inicio.php">Inicio</a>
            <a href="../nosotros.html">Nosotros</a>
            <a href="#fooder">Contactos</a>
            <a href="productosV.php">Productos</a>
        </nav>
   
    </table>

</header><div class="ali"style="margin-top:5%;"><h1>Productos</h1></div>
<main style="margin-top:5%;margin-left:8%; margin-right:10%;">
        <div class="row row-cols-1 row-cols-sm-2 g-5">
            <?php foreach($rta as $row) { ?>
            <div class="col">
                    
                    <?php
                        $id=$row['id_producto'];
                        $imagen="../img/inventario/" . $id . "/imagen.jpg";

                        if (!file_exists($imagen)) {
                           $imagen="../img/no-photo.png";
                        }
                    ?>
                    <div class="card-body">
                    <div class="alinear"><img src=" <?php echo $imagen;?>">
                    <h6 class="card-text"><?php echo  $row['tipo']; ?></h6>
                    </div>
                    <br>
                    <div class="">
                    <h4 class="card-title"><?php echo $row['nom_producto']; ?></h4>
                        <br>
                        <p class="card-text"><?php echo  $row['descripcion']; ?></p>
                    </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="../Ventas/VentasCli.php?id_producto=<?php echo  $row['id_producto'];?>" class="btn btn-warning">agregar</a>
                        </div>        
                    </div>
            </div>
            <?php } ?>
        </div>


</main>
    
</body>
</html>

