<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  <!--Libreria para los delimitadores de la tarjeta-->
  <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
  <!--Estilo Personal-->
  <link rel="stylesheet" type="text/css" href="../View/css/realizarPago.css">
  <!--Funciones propias-->
  <script src="../View/JS/funcionesdos.js"></script>

   <!-- Los iconos tipo Solid de Fontawesome-->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
 <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>
<body>
  <!--Codigo del nav-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

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
            <a class="dropdown-item" href="../Controller/usuarioVerMasVendidos.php">Novedades y más vendidos</a>
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
  <br><br><br>
  <h1 class="tituloInfoGeneral">Resumen de la Venta</h1>

      <br><br>
    
<hr color="blue" size=3>
  
    <p class="texto">Total Productos: <?=$_SESSION['cantidad']?> <p>
   
    <p class="texto">SubTotal: <?=$_SESSION['subtotal']?> €</p>
  
    <p class="texto">Gastos de Envío: <?=$_SESSION['envio'] ?> € </p>

    <?php
 
    ?>
    <p class="texto">Total con IVA: <?=$_SESSION['total']?> € </p>
    <h5 class="tituloInfoGeneral">¿Tienes algún cupón descuento?</h5>
    <div class="d-flex justify-content-center align-items-center container ">
    
       <form action="#" method="post" id="formDescuento">
        <div class="form-group">
          <input type="text" class="form-control" name="descuento" value=""><br>
          <input type="submit" class="btn btn-danger" value="Aplicar">
         </div>
       </form>    
      </div>
           
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
                <input type="text" class="form-control required" id="nombre">
            </div>

            <div class="form-group">
                <label for="inputApellido" class="control-label">Apellidos</label>
                <input type="text" class="form-control" id="inputApellido" required>
            </div>
            
             <div class="form-group">
                <img src="../View/img/visa.jpg" width="50" height="50">
                <label for="inputApellido" class="control-label">Nº Cuenta</label>
                <input type="text"  id="input-element" class="form-control" name="tarjeta"  required="">  
            </div>

            <div class="form-group">
                <label for="inputApellido" class="control-label">CVV</label>
                 <input type="number" id="cvv" class="form-control" name="cvv" min="100"  max="999" required="">
                
            </div>
            
            <input class="btn btn-danger" type="submit" name="pago" value="Realizar Pago">

        </form>

    </div>

</div>


</div>

<br><br>


 </div>
 <script type="text/javascript">
  var cleave = new Cleave('#input-element', {
    creditCard: true,
    onCreditCardTypeChanged: function (type) {
        // update UI ...
    }
});

 
 </script>

 <!-- Footer -->
   <footer id="myFooter" class="py-4 bg-dark text-white-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src="../View/img/Logo.png">
                </div>
                <div class="col-sm-2">
                    <h5>Empezar</h5>
                    <ul>
                        <li><a href="../Controller/usuarioVerCatalago.php">Catálogo Completo</a></li>
                        <li><a href="../Controller/usuarioVerMasVendidos.php">Novedades y más vendidos</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Sobre Nosotros</h5>
                    <ul>
                        <li><a href="../Controller/principalUsuario.php">Conócenos</a></li>
                        <li><a href="../Controller/usuFormularioContacto.php">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Soporte<e/h5>
                    <ul>
                        <li><a href="../Controller/usuAyuda.php">Ayuda</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                      <h5>Redes Sociales</h5>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></i></a>
                        <a href="#" class="Instagram"><i class="fab fa-instagram"></i></i></a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="container text-center">
      <small>Copyright &copy; The Corner Of Dreams</small>
    </div>
    </footer>
<!-- Footer --> 
  </body>

</html>