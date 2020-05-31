<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="../View/css/estilos.css">
   <script  src="../View/JS/funciones.js"></script>
	 <title></title>
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
        <button  id="entrar" type="button" class="btn btn-primary">Entrar</button>
      </div>
    </div>
  </div>
</div>



<!--Comienzo del contenido-->	
<div class="container">
<br><br>
<h1 class="titulo">Datos de contacto</h1><br>


  <div class="media">
    <img src="../View/img/usuarios.jpg" alt="John Doe" class="mr-4 mt-4 rounded-circle" style="width:100px;">
       <div class="media-body" >
        <div class="card  mb-4" style="max-width: 30rem;">
          <div class="card-header text-danger"><h2><?=$usuAux->getNombre()?></h2></div>
          <div class="card-body text-secondary">
            <h5 class="card-title">Teléfono: <?=$usuAux->getTelefono()?></h5>
            <h4 class="card-title">Email: <?=$usuAux->getCorreo()?></h4>
            <h5 class="card-title">Dirección: <?=$usuAux->getDireccion()?>, CP: <?=$usuAux->getCp()?></h5>
          </div>
      </div>
    </div>
</div>




<br><br>
<a href="../Controller/adminVerPrestamos.php">Volver</a>
</div>
<br><br>


  <!-- Footer -->
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; The Corner Of Dreams</small>
    </div>
  </footer>
<!-- Footer -->

</body>
</html>