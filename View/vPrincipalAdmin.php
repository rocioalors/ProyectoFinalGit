<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="../View/css/cards-gallery.css">
</head>
<body>
  <form action="../Controller/cerrarSesion.php" method="get">
  <button type="submit" class="btn btn-secondary btn-lg">Cerrar Sesion</button></form>
   <section class="gallery-block cards-gallery">
      <div class="container">
          <div class="heading">
            <img src="../View/img/Logo.png" width="250px" height="250px">
          </div>
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
            <<div class="col-md-6 col-lg-4">
                  <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="../Controller/adminVerAdministradores.php">
                      <img src="../View/img/administrador.png"  width="150px" height="150px" alt="Card Image" class="card-img-top">
                    </a>
                      <div class="card-body">
                          <h6><a href="../Controller/adminVerAdministradores.php">Gestion de Admnistradores</a></h6>
                          <p class="text-muted card-text">Esta función permite dar de alta a nuevos administradores, modificar datos y eliminar administradores.</p>
                      </div>
                  </div>
              </div>-->
            
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="ventas(document.getElementById('contraseña').value)">Save changes</button>
      </div>
    </div>
  </div>
</div>
   
    <script>
        baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
    </script>
</body>
</html>