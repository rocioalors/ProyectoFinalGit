<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!--Estilo Personalizaso-->
  <link rel="stylesheet" type="text/css" href="../View/css/estiloUsuarioPerfil.css">
  <!--Nuestras funciones-->
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
            <a class="nav-link" href="../Controller/usuarioVerPerfil.php">Mi Perfil</a>
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


<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
    <div class="bg-secondary border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-light">Menú de Opciones </div>
      <div class="list-group list-group-flush">
        <a href="../Controller/usuarioVerPerfil.php" class="list-group-item list-group-item-action bg-secondary text-light">Información General</a>
        <a href="../Controller/usuarioVerDatosPersonales.php" class="list-group-item list-group-item-action bg-secondary text-light">Datos Personales</a>
        <a href="../Controller/usuarioVerPrestamos.php" class="list-group-item list-group-item-action bg-secondary text-light">Préstamos</a>
        <a href="../Controller/usuarioVerCompras.php" class="list-group-item list-group-item-action bg-secondary text-light">Compras</a>
        <a href="../Controller/usuAyuda.php" class="list-group-item list-group-item-action bg-secondary text-light">Ayuda</a>
      </div>
    </div>


  
  
 <div class="container" id="principal">
 <!--Botón para mostrar o ocultar el sidebar-->
  <br>
   <button class="btn btn-primary" id="menu-toggle">Mostrar/Ocultar Opciones</button>
   <br><br>
    <h1 class="tituloInfoGeneral">Detalle de la Compra</h1>
   <br><br>
   <div class="container-fluid">
    <div class="row">
      <!--Datos de la empresa-->
        <div class="col-8">
          <P>De:</P>
          <p>The Corner Of Dreams</p>
          <p>47394439H</p>
          <p>C/ Judea, 6 - 41710, Utrera</p>
          <p>626278473</p>
          <p>thecornerofdreams@gmail.com</p>
          
        </div>
      <!--Datos del comprador-->
        <div class="col-4">
         <P>Para:</P>
          <p><?=$usuario->getNombre()?></p>
          <p><?=$usuario->getDni()?></p>
          <p><?=$usuario->getDireccion()?>, <?=$usuario->getCp()?></p>
          <p><?=$usuario->getTelefono()?></p>
          <p><?=$usuario->getCorreo()?></p>
         
        </div>
    </div>
</div>
    <p class="factura">Factura nº <?=$_REQUEST['id_venta']?> de <?=$date?></p>

  <div class="table-responsive">
  <table class="table table-bordered">
    <thead class="table-info text-white">
      <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Precio/Unidad</th>
        <th>Cantidad</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
    <?php 
     foreach ($venta as $key) {
      ?>
      <tr>
      <td><?=$key['id_libro']?></td> 
      <td><?=$key['titulo']?></td>  
      <td><?=$key['precio']?>€</td> 
      <td><?=$key['cantidad']?></td>
      <td><?=$key['cantidad']*$key['precio']?>€</td>

      <?php
      }
      ?>
      </tr>
    </tbody>

  </table>
</div>
  <div class="row">
    <div class="col-sm-9"></div>
    <div class="col-sm">IVA</div>
    <div class="col-sm"><?=$IVA?>€</div>
  </div>

  <div class="row">
    <div class="col-sm-9"></div>
    <div class="col-sm">Envio</div>
    <div class="col-sm"><?=$envio?>€</div>
  </div>

  <div class="row">
    <div class="col-sm-9"></div>
    <div class="col-sm">Total</div>
    <div class="col-sm"><?=$_REQUEST['total']?>€</div>
  </div>

 <br><br>


<br><br><br> 



</div>

</div>

</div>
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