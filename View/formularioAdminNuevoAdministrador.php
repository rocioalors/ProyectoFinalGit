<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	 <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../View/css/estiloFormulario.css"> 
  <script  src="../View/JS/funciones.js"></script>
   
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
            <a href="../Controller/adminAyuda.php" class="nav-item nav-link">Ayuda</a>
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
        <button id="entrar" type="button" class="btn btn-primary">Entrar</button>
      </div>
    </div>
  </div>
</div>



  <!--Código Formulario-->
  <h1 class="titulo">Formulario</h1>
 <div class="container">

     
<form id="form" action="../Controller/<?=$destino?>"  method="POST">

  
  <div class="form-group">

    <label class="texto" for="usr">Usuario:</label>
      <input type="text" class="form-control" id="usuario" name="usuario" value="<?=$usuario?>" required>

    <label class="texto" for="usr">Contraseña:</label>
      <input type="text" class="form-control" id="contraseña" name="contraseña" value="<?=$contraseña?>" required>

    <label class="texto" for="usr">DNI:</label>
      <input type="text" class="form-control" id="dni" name="dni" value="<?=$dni?>" required>

    <label class="texto" for="usr">Email:</label>
      <input type="text" class="form-control" id="email2" name="email" value="<?=$email?>" required>

    <label class="texto" for="usr">Telefono:</label>
      <input type="text" class="form-control" id="telefono" name="telefono" value="<?=$telefono?>" required>

    <br><br>
      <input type="submit" class="btn btn-danger" value="GRABAR">
    <a href="../Controller/adminVerAdministradores.php">Volver al listado</a>
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