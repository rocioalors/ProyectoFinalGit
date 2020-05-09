<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../View/css/estiloUsuarioPerfil.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
            <a class="nav-link" href="../Controller/principalUsuario.php">Contacto</a>
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


<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
    <div class="bg-secondary border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-light">Menú de Opciones </div>
      <div class="list-group list-group-flush">
        <a href="../Controller/usuarioVerPerfil.php" class="list-group-item list-group-item-action bg-secondary text-light">Información General</a>
        <a href="../Controller/usuarioVerDatosPersonales.php" class="list-group-item list-group-item-action bg-secondary text-light">Datos Personales</a>
        <a href="../Controller/usuarioVerPrestamos.php" class="list-group-item list-group-item-action bg-secondary text-light">Préstamos</a>
        <a href="../Controller/usuarioVerCompras.php" class="list-group-item list-group-item-action bg-secondary text-light">Compras</a>
      </div>
    </div>


  
  
 <div class="container" id="principal">
 <!--Botón para mostrar o ocultar el sidebar-->
  <br>
   <button class="btn btn-primary" id="menu-toggle">Mostrar/Ocultar Opciones</button>
   <br>
    <img class="imgUsuario" src="../View/img/compra.jpg" width="180">
  <br><br>

  <div class="table-responsive">
  <table class="table table-bordered">
    <thead class="table-info text-white">
      <tr>
        <th>Fecha Compra</th>
        <th>Nº Factura</th>
        <th>Total</th>
        <th>Ver Detalle</th>
        <th>Descargar Factura</th>
      </tr>
    </thead>
    <tbody>
    <?php 
     foreach ($compras as $key) {
      $fecha=$key->getFechacompra();
  
        $date= strftime("%d de %B del %Y", strtotime($fecha));
      ?>
      <tr>
      <td><?=$date?></td> 
      <td><?=$key->getId()?></td>  
      <td><?=$key->getTotal()?></td> 
      <td>
        <form action="../Controller/usuarioVerDetalleCompra.php" method="post">
        <input type="hidden" name="usuario" value="<?=$key->getUsuario()?>">
        <input type="hidden" name="id_venta" value="<?=$key->getId()?>">
        <input type="hidden" name="fecha" value="<?=$key->getfechaCompra()?>">
        <input type="hidden" name="total" value="<?=$key->getTotal()?>">
        <input type="submit" class="btn btn-success" name="enviar" value="Ver Detalle">
      </form>
      </td>
      
      <!--Utilizo estos datos para generar el pdf de la factura-->
      <td><form action="../Controller/generarpdf.php" method="post">
        <input type="hidden" name="usuario" value="<?=$key->getUsuario()?>">
        <input type="hidden" name="id_venta" value="<?=$key->getId()?>">
        <input type="hidden" name="fecha" value="<?=$key->getfechaCompra()?>">
        <input type="hidden" name="total" value="<?=$key->getTotal()?>">
        <input type="submit" class="btn btn-info" name="enviar" value="Generar PDF">
      </form>
       </td>
      </tr>

      <?php
      }
      ?>
    </tbody>

  </table>
  <br><br>
  
</div>  


</div>

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