<?php
require_once "Login/validacion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="css/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <title>Macro System</title>

</head>
<body>
<header>
    <table>
        <a href="#" class="logo">
        <img src="img/logo.jpg"  alt="#">
        </a>
    </table>
    <table>
        <nav>
            <a href="iniciomodulos.php">Inicio</a>
            <a href="Ventas/ventas.php">Ventas</a>
            <a href="Inventario/Inventario.php">Inventario</a>
            <a href="Login/CerrarSesion.php">Cerrar Sesion</a>
        </nav>
   
    </table>

</header>

<main>
<form class="ali">
    
    <div class="sec1">

        <section>
        <h1>Inicio</h1>
        <h2>Bienvenidos a los diferentes modulos que tiene macro system</h2>
        
        <img src="img/logo.jpg" height="80px" alt="">
        <br>
        </section>
    </div>
    <br>
    <div class="sec2">
        <section>
        <h1>MODULOS</h1>
        
            <div class="box-container">
                <div class="box">
                    <img src="img/InShot_20230509_140956643.jpg"alt=""><br>
                    <a href="Ventas/ventas.php" class="btn1">VENTAS</a>
                </div>
            
                <div class="box">
                    <img src="img/inventario.png"alt=""><br>
                    <a href="Inventario/inventario.php" class="btn1">INVENTARIO</a>
                </div>
            </div>   
        </section>
    </div>
    <div class="sec1">
        <section>
       
        <h1>Nosotros</h1>
        <h2>Contamos con profesionales que analizan constantemente los sectores industriales y comerciales, evaluando debilidades y fortalezas, creando alianzas con las marcas mas conocidas a nivel nacional e internacional garantizando asi productos con
            los mas altos estandares de calidad y seguridad.  
        </h2>
        <a href="Proveedores/Proveedores.php" class="btn1">Saber más</a>
       
        </section>
    </div>
</form>
</main> 
<br>
    
<footer>
    <table>
            <a class="pie">Contactenos</a>
    </table>
    <table>
        <nav>
            <div class= "con" >
                <a href="https://wa.me/573144652179?text=Hola,%20me%20das%20informacion."><img src="img/124034.png" height=50px alt=""></a><a></a>
                <a href="https://wa.me/573144652179?text=Hola,%20me%20das%20informacion.">(57)3144652179</a>
                <a href="https://www.google.com/search?q=Cra.+25+%2322+A+68%2C+Bogot%C3%A1&rlz=1C1ONGR_esCO1024CO1024&tbm=lcl&ei=8MxSZNzjJ7PpxgHo8JygDw&ved=0ahUKEwjcm4z9htr-AhWztDEKHWg4B_QQ4dUDCAk&uact=5&oq=Cra.+25+%2322+A+68%2C+Bogot%C3%A1&gs_lcp=Cg1nd3Mtd2l6LWxvY2FsEAMyAggmUABYlAtgqhZoAXAAeACAAXuIAXuSAQMwLjGYAQCgAQGgAQKwAQDAAQE&sclient=gws-wiz-local"><img src="img/descarga.png" height=50px alt=""></a><a></a>
                <a href="https://www.google.com/search?q=Cra.+25+%2322+A+68%2C+Bogot%C3%A1&rlz=1C1ONGR_esCO1024CO1024&tbm=lcl&ei=8MxSZNzjJ7PpxgHo8JygDw&ved=0ahUKEwjcm4z9htr-AhWztDEKHWg4B_QQ4dUDCAk&uact=5&oq=Cra.+25+%2322+A+68%2C+Bogot%C3%A1&gs_lcp=Cg1nd3Mtd2l6LWxvY2FsEAMyAggmUABYlAtgqhZoAXAAeACAAXuIAXuSAQMwLjGYAQCgAQGgAQKwAQDAAQE&sclient=gws-wiz-local">Ubicacion</a>
            </div>
              
        </nav>
    </table>
</footer>
    
    
</body>
</html>

