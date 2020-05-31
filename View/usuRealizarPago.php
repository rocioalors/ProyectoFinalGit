<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!--Estilo Personal-->
  <link rel="stylesheet" type="text/css" href="../View/css/realizarPago.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <script src="../View/JS/funcionesdos.js"></script>

   <!-- Los iconos tipo Solid de Fontawesome-->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
 <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>
<body>
  <!--Codigo del nav-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <!--Botón para comprimir en ventana pequeña-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
       aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">

  <!-- Links -->
     <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../Controller/principalUsuario.php">Inicio</a>
        </li>

    <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Catálogo
            </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../Controller/usuarioVerCatalago.php">Todo el catálogo</a>
            <a class="dropdown-item" href="../Controller/usuarioVerMasVendidos.php">Los más vendidos</a>
          </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../Controller/usuarioVerPerfil.php">Mi Perfíl</a>
         </li>

          <li class="nav-item">
            <a class="nav-link" href="../Controller/usuBlog.php">Blog</a>
         </li>

        
        <li class="nav-item">
            <a class="nav-link" href="../Controller/usuFormularioContacto.php">Contacto</a>
         </li>
        </ul>
        <div class="navbar-nav ml-auto">
              <a href="../Controller/verContenidoCesta.php"><i class="fas fa-shopping-cart"></i> <?=$_SESSION['cantidad']?> Total:<?=$_SESSION['subtotal']?>€</a> 
          </div>
            <div class="navbar-nav ml-auto">
            <button type="button" class="btn btn-warning" onclick="cerrarSesion()">Cerrar sesion</button>
          </div>
   </div>
</nav>



<!--Comienzo del contenido de la cesta-->
<div class="container">
  <br><br>
  <h1 class="tituloInfoGeneral">Resumen de la Venta</h1>

      <br><br>
    
<hr color="blue" size=3>
  
    <p class="texto">Total Productos: <?=$_SESSION['cantidad']?> <p>
   
    <p class="texto">SubTotal: <?=$_SESSION['subtotal']?> €</p>
  
    <p class="texto">Gastos de Envío: <?=$_SESSION['envio'] ?> € </p>

    <p class="texto">Total con IVA: <?=$_SESSION['total']=$_SESSION['subtotal']+$_SESSION['envio']; ?> € </p>
         
           
  <a  class="btn btn-info" href="../Controller/usuarioVerCatalago.php">Seguir Comprando</a>

 <hr color="blue" size=3>

 <!--Formulario para realizar el pago-->
 
 <h1 class="tituloInfoGeneral">Realizar Pago</h1>
  <br>
 <div class="respuesta"></div>
 <div class="d-flex justify-content-center align-items-center container ">

    <div class="row ">

        <form  method="post" action="../Controller/finCompra.php">
            <div class="form-group">
                <label for="inputUserName" class="control-label">Introduce tu nombre</label>
                <input type="text" class="form-control" id="nombre" required="">
            </div>

            <div class="form-group">
                <label for="inputApellido" class="control-label">Apellidos</label>
                <input type="text" class="form-control" id="inputApellido" required>
            </div>
            
             <div class="form-group">
                <img src="../View/img/visa.jpg" width="50" height="50">
                <label for="inputApellido" class="control-label">Nº Cuenta</label>
                <input type="text" class="form-control" name="tarjeta" minlength="16"  maxlength="16" required="">  
            </div>

            <div class="form-group">
                <label for="inputApellido" class="control-label">CVV</label>
                 <input type="text" class="form-control" name="cvv" minlength="3"  maxlength="3" required="">
                
            </div>
            <input class="btn btn-danger" type="submit" name="pago" value="Realizar Pago">

        </form>

    </div>

</div>


</div>

<br><br>


 </div>

 <!-- Footer -->
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; The Corner Of Dreams</small>
    </div>
  </footer>
<!-- Footer --> 
  </body>

</html>