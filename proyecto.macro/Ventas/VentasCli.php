
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="../css/estilos.css">
    <link href="css/bootstrap.min.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="../css/bootstrap.min.js"></script>
    <title>Resgistro Ventas</title>

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
            <a href="../inicio.php">Inicio</a>
            <a href="../nosotros.html">Nosotros</a>
            <a href="../Productos/productosV.php">Productos</a>
        </nav>
    </table>
</header>

<body>
<div class="container">
        <div class="ali">
            <h3 style= "margin-top:5%">Registrar Venta</h3>
        </div>

    </div> 

<form  action="php.php"  method= "post" >

  <div class ='row' color: >
    <table class = 'table  table-dark table-striped'>
        <tr>
            <th>id_cliente</th>
            <th>fecha</th>
            <th>hora</th>
        </tr>
        <div class="col-sm-10 ">
            <td><input type="text" class="form-control" name="id_cliente" required placeholder="N-° Documento"></td>
        </div>
        <div class="col-sm-10 ">
          <td><input type="date" class="form-control"  name="fecha_venta" required placeholder="Fecha" ></td>
        </div>
        <div class="col-sm-10">
          <td><input type="time" class="form-control"  name="hora" required placeholder="Hora" ></td>
        </div>
        
        </tr>
        </table>
        <br>
        <table class = 'table table-dark table-striped'>
        <tr>
            <th>id producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
        <input type="hidden" class="form-control" name="id_venta" >
        <div class="col-sm-10 ">
            <td><input type="text" class="form-control" name="id_producto" placeholder="id" ></td>
        </div>
        <div class="col-sm-10 ">
            <td><input type="text" class="form-control" name="valor" placeholder="valor" ></td>
        </div>
        <div class="col-sm-10 ">
            <td><input type="text" class="form-control" name="cantidad_venta" placeholder="cantidad_venta" ></td>
        </div>
        </table> 
        <table class = 'table  table-dark table-striped'> 
        <tr>
            <!--<th>forma_pago</th>-->
        </tr>

        <!--<div class="col-sm-10 ">
            <td><select  class="form-control">
                <option selected disabled value="">Forma de pago</option>
                <option value="">credito</option>
                <option value="">debito</option>
                <option value="">paypal</option>
              </select></td>
        </div>-->
        </table>
    </div>    
    <br>
    <input type="submit" value="Realizar Compra" class="btn btn-warning col-2">


</form>
</body>
</html>