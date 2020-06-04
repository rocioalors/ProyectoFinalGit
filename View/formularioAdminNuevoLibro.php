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
        <button  id="entrar" type="button" class="btn btn-primary">Entrar</button>
      </div>
    </div>
  </div>
</div>

<!--Contenido del formulario-->
  <h1 class="titulo">Formulario</h1>
  <!--Código Formulario-->
<form id="form" action="../Controller/<?=$destino?>" enctype="multipart/form-data" method="POST">
<div class="container"> 

  <div class="form-group">


 <label class="texto" for="usr">Imagen del Libro:</label><br>
  <input type="file" id="imagen" name="imagen" value="<?=$imagen?>">
 <br>
  <label class="texto" for="usr">Titulo:</label>
  <input type="text" class="form-control" id="titulo" name="titulo" value="<?=$titulo?>" required>

  <label class="texto" for="usr">Autor:</label>
  <input type="text" class="form-control" id="autor" name="autor" value="<?=$autor?>" required>

  <label class="texto" for="usr">Descripcion:</label>
  <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?=$descripcion?>" required>

  <label class="texto" for="usr">Precio:</label>
  <input type="text" class="form-control" id="precio" name="precio" value="<?=$precio?>" required>

  <label class="texto" for="usr">Cantidad en alquiler:</label>
  <input type="text" class="form-control" id="cantdalquiler" name="cantAlquiler" value="<?=$cantidadalquiler?>" required>


  <label class="texto" for="usr">Cantidad en venta:</label>
  <input type="text" class="form-control" id="cantVender" name="cantVender" value="<?=$cantidadvender?>" required>


 <label class="texto" for="usr">Genero:</label>
  <input type="text" class="form-control" id="genero" name="genero" value="<?=$genero?>" required>

 <label class="texto" for="usr">Edición:</label>
  <input type="text" class="form-control" id="edicion" name="edicion" value="" required>

<label class="texto" for="usr">Estado:</label>
    <select class="form-control" id="estado" name="estado">
      <option value="Habilitado">Habilitado</option>
      <option value="Deshabilitado">Deshabilitado</option>
    </select><br>

 

 

  <br><br>

  <input type="submit" class="btn btn-danger" value="GRABAR">
  <a href="../Controller/verCatalogo.php">Volver al listado</a>
</div>

</div>



</body>
</html>