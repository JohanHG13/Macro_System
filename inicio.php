<?php
require_once "Login/validacionCli.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="css/estilos.css">
    <script src="../js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <title>Inicio</title>

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
            <a href="inicio.php">Inicio</a>
            <a href="nosotros.html">Nosotros</a>
            <a href="#fooder">Contactos</a>
            <a href="Ventas/productos.html">Productos</a>
            <a href="Login/CerrarSesion.php">Cerrar Sesion</a>
        </nav>
   
    </table>

</header>


<main>

<form class="ali">

    <section>
    <a>
        <h1>Inicio</h1>
        <h2>Para nosotros un gusto poder presentarles nuestra compañía,
            Servicios Industriales D.F. s.a.s. creada con el fin de comercializar productos de transporte de fluidos, transporte de potencia, accesorios y todos aquellos repuestos que su compañia necesita.</h2>
        
        <img src="img/logo.jpg" height="80px" alt="">
       
        
    </a>  
    </section>
    <br>
    <section>
        <div class="sec2">
        <h1>Productos</h1>
            <div class="box-container">
            
            <div class="box">
            <h3>MANGUERAS</h3>
                <img src="img/WhatsApp Image 2023-03-22 at 3.43.12 PM.jpeg" height="100px" alt="">
            
                <h2>Managueras industriales y hidraulicas</h2>
            </div>
          
            <div class="box">
            <h3>CONEXIONES</h3>
                <img src="img/WhatsApp Image 2023-03-22 at 3.50.03 PM.jpeg" height="100px" alt="">
            
                <h2>Todo tipo de rodamientos, correas, acoples y accesorios disponibles</h2>
            </div>
        </div> 
        <a href="Ventas/productos.html" class="btn">Saber más</a>
    </section>
   
    <section>
    <a>
        <h1>Nosotros</h1>
        <h2>Contamos con profesionales que analizan constantemente los sectores industriales y comerciales, evaluando debilidades y fortalezas, creando alianzas con las marcas mas conocidas a nivel nacional e internacional garantizando asi productos con
            los mas altos estandares de calidad y seguridad.  
        </h2>
        <a href="nosotros.html" class="btn">Saber más</a>
    </a>
    </section>
    <br>
</form>
</main> 
<footer id="fooder">
    <table>
            <a class="pie">Contactenos</a>
    </table>
    <table>
        <nav>
            <div class= "con" >
                <a href="https://wa.me/573144652179?text=Hola,%20me%20das%20informacion."><img src="img/124034.png" height=50px alt=""></a>
                <a href= "https://wa.me/573144652179?text=Hola,%20me%20das%20informacion.">(57)3144652179</a>
                <a href="https://www.google.com/search?q=Cra.+25+%2322+A+68%2C+Bogot%C3%A1&rlz=1C1ONGR_esCO1024CO1024&tbm=lcl&ei=8MxSZNzjJ7PpxgHo8JygDw&ved=0ahUKEwjcm4z9htr-AhWztDEKHWg4B_QQ4dUDCAk&uact=5&oq=Cra.+25+%2322+A+68%2C+Bogot%C3%A1&gs_lcp=Cg1nd3Mtd2l6LWxvY2FsEAMyAggmUABYlAtgqhZoAXAAeACAAXuIAXuSAQMwLjGYAQCgAQGgAQKwAQDAAQE&sclient=gws-wiz-local"><img src="img/descarga.png" height=50px alt=""></a><a></a>
                <a href="https://www.google.com/search?q=Cra.+25+%2322+A+68%2C+Bogot%C3%A1&rlz=1C1ONGR_esCO1024CO1024&tbm=lcl&ei=8MxSZNzjJ7PpxgHo8JygDw&ved=0ahUKEwjcm4z9htr-AhWztDEKHWg4B_QQ4dUDCAk&uact=5&oq=Cra.+25+%2322+A+68%2C+Bogot%C3%A1&gs_lcp=Cg1nd3Mtd2l6LWxvY2FsEAMyAggmUABYlAtgqhZoAXAAeACAAXuIAXuSAQMwLjGYAQCgAQGgAQKwAQDAAQE&sclient=gws-wiz-local">Ubicacion</a>
            </div>
              
        </nav>
    </table>
</footer>
<script>
            $(document).ready(function() {
        $('a[href^="#"]').click(function() {
            var destino = $(this.hash); //this.hash lee el atributo href de este
            $('html, body').animate({ scrollTop: destino.offset().top }, 700); //Llega a su destino con el tiempo deseado
            return false;
        });
        });
</script>
    
    
</body>
</html>