<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="../View/css/cards-gallery.css">
    <script src="../View//JS/funciones.js"></script>
</head>

<body>
 <!--Código barra de navegación-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="../Controller/principalAdmin.php" class="nav-item nav-link active">Inicio</a>
            <a href="../Controller/verCatalogo.php" class="nav-item nav-link">Libros</a>
            <a href="../Controller/verUsuarios.php" class="nav-item nav-link">Usuarios</a>
            <a href="../Controller/adminVerPrestamos.php" class="nav-item nav-link">Prestamos</a>
            <a href="../Controller/adminVerAdministradores.php" class="nav-item nav-link">Administradores</a>
            <a href="../Controller/adminLecturaEmail.php" class="nav-item nav-link">Emails</a>
            <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#exampleModalCenter">Ventas</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a></td>
        </div>
    </div>
</nav> 




  <!--Contenido de la pagina principal-->
   <section class="gallery-block cards-gallery">
      <div class="container">
          <div class="heading">
            <img src="../View/img/Logo.png" width="250px" height="250px">
          </div>
        <hr>

          <h2 class="tituloInfoGeneral">Información General</h2> 
          <div class="row">
          <div class="col-md-4 col-lg-2 bg-primary" id="visitas">
             <p>Nº de Visitas Recibidas: <?=$_COOKIE['contador']?> </p>
          </div>

          <div class="col-md-4 col-lg-2 bg-warning" id="visitas">
             <p>Usuarios Registrados: <?=$usuarios?> </p>
          </div>

           <div class="col-md-4 col-lg-2 bg-success" id="visitas">
             <p>Libros Registrados: <?=$libros?> </p>
          </div>

          <div class="col-md-4 col-lg-2 bg-info" id="visitas">
             <p>Préstamos Activos: <?=$prestamos?> </p>
          </div>

           <div class="col-md-4 col-lg-2 bg-danger" id="visitas">
             <p>Préstamos Fuera de Plazo: <?=$fueraPlazos?> </p>
          </div>
        </div>

        <hr>

        <h2 class="tituloInfoGeneral">Gestionar Datos</h2>
         
          <div class="row">
            <!-- Editar catalogo-->
              <div class="col-md-6 col-lg-4">
                  <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="../Controller/verCatalogo.php">
                      <img src="../View/img/gestionlibros.jpg" alt="Card Image" class="card-img-top" width="150px" height="150px">
                    </a>
                      <div class="card-body">
                          <h6><a href="../Controller/verCatalogo.php">Editar Catálogo</a></h6>
                          <p class="text-muted card-text">Permite al administrador gestionar todo lo relacionado con el catálogo de libros (Añadir, Editar, Eliminar..).</p>
                      </div>
                  </div>
              </div>
              <!-- Gestionar usuarios -->
              <div class="col-md-6 col-lg-4">
                  <div class="card border-0 transform-on-hover">
            <a class="lightbox" href="../Controller/verUsuarios.php">
                      <img src="../View/img/usuarios2.png" alt="Card Image" class="card-img-top" width="150px" height="150px">
                    </a>
                      <div class="card-body">
                          <h6><a href="../Controller/verUsuarios.php">Gestionar Usuarios</a></h6>
                          <p class="text-muted card-text">Permite al administrador comprobar el número de usuarios que hay y hacer alguna modificación el mismo si fuese necesario.</p>
                      </div>
                  </div>
              </div>
              <!--Gestionar Préstamos -->
              <div class="col-md-6 col-lg-4">
                  <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="../Controller/adminVerPrestamos.php">
                      <img src="../View/img/prestamo.png" alt="Card Image" class="card-img-top" width="150px" height="150px">
                    </a>
                      <div class="card-body">
                          <h6><a href="../Controller/adminVerPrestamos.php">Estado Préstamos</a></h6>
                          <p class="text-muted card-text">Permite al administrador visualizar el estado de todos los prestamos realizados por los usuarios.</p>
                      </div>
                  </div>
              </div>
              <!-- Gestionar Ventas -->
              <div class="col-md-6 col-lg-4">
                  <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="#"data-toggle="modal" data-target="#exampleModalCenter">
                      <img src="../View/img/ventas.jpg" alt="Card Image" class="card-img-top" width="150px" height="150px">
                    </a>
                      <div class="card-body">
                          <h6><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Gestión Ventas</a></h6>
                          <p class="text-muted card-text">Permite al administrador ver las ventas realizadas por los usuarios.</p>
                      </div>
                  </div>
              </div>

            <!--Card Gestion de administradores-->
            <div class="col-md-6 col-lg-4">
                  <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="../Controller/adminVerAdministradores.php">
                      <img src="../View/img/administrador.png"  width="150px" height="150px" alt="Card Image" class="card-img-top">
                    </a>
                      <div class="card-body">
                          <h6><a href="../Controller/adminVerAdministradores.php">Gestion de Admnistradores</a></h6>
                          <p class="text-muted card-text">Esta función permite dar de alta a nuevos administradores, modificar datos y eliminar administradores.</p>
                      </div>
                  </div>
              </div>

               <!--Card Gestion de Correo-->
            <div class="col-md-6 col-lg-4">
                  <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="../Controller/adminLecturaEmail.php">
                      <img src="../View/img/email.png"  width="150px" height="150px" alt="Card Image" class="card-img-top">
                    </a>
                      <div class="card-body">
                          <h6><a href="../Controller/adminLecturaEmail.php">Gestion de Email Formulario de Contacto</a></h6>
                          <p class="text-muted card-text">Esta función permite leer los email recibidos mediante el formualario de contacto.</p>
                      </div>
                  </div>
              </div>
            
          </div>
      </div>
    </section>

    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Esta información es confidencial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="info" id="info"></div>
       <form>
          <div class="form-group" id="contrasena-group">
              <input type="password" class="form-control" placeholder="Contraseña" name="contraseña" id="contraseña" required/>
              </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="ventas(document.getElementById('contraseña').value)">Entrar</button>
      </div>
    </div>
  </div>
</div>
   
    <script>
        baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
    </script>

  <!-- Footer -->
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; The Corner Of Dreams</small>
    </div>
  </footer>
<!-- Footer -->
</body>
</html>