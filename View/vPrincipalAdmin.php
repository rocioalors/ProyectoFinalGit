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
            <a class="lightbox" href="../img/image2.jpg">
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
                    <a class="lightbox" href="../img/image3.jpg">
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
                    <a class="lightbox" href="../img/image4.jpg">
                      <img src="../View/img/ventas.jpg" alt="Card Image" class="card-img-top" width="150px" height="150px">
                    </a>
                      <div class="card-body">
                          <h6><a href="#">Gestión Ventas</a></h6>
                          <p class="text-muted card-text">Permite al administrador ver las ventas realizadas por los usuarios.</p>
                      </div>
                  </div>
              </div>
            <!--- <div class="col-md-6 col-lg-4">
                  <div class="card border-0 transform-on-hover">
                    <a class="lightbox" href="../img/image5.jpg">
                      <img src="../View/img/ventas.jpg" alt="Card Image" class="card-img-top">
                    </a>
                      <div class="card-body">
                          <h6><a href="#">Estado de Ventas</a></h6>
                          <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                      </div>
                  </div>
              </div>-->
            
          </div>
      </div>
    </section>
   
    <script>
        baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
    </script>
</body>
</html>