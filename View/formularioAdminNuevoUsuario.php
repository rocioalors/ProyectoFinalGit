<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!--JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 <!-- Los iconos tipo Solid de Fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
<!--Estilo Personalizado-->
<link rel="stylesheet" type="text/css" href="../View/css/estiloFormulario.css">
<!--Funciones-->
<script src="../View/JS/funciones.js"></script>
   
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
</nav>



  <!--Código Formulario-->
<form id="form" action="../Controller/<?=$destino?>" enctype="multipart/form-data" method="POST">
<div class="container"> 
  <h1 class="titulo">Formulario</h1>
  <div class="form-group">

 <input type="hidden" name="id" value="<?=$id?>">
  <label class="texto" for="usr">Nombre:</label>
  <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$nombre?>" required>

  <label class="texto" for="usr">DNI:</label>
  <input type="text" class="form-control" id="dni" name="dni" value="<?=$dni?>" pattern="\d{8}[a-z A-Z]$" title="Tiene que tener 8 dígitos y una letra" required>

  <label class="texto" for="usr">Correo:</label>
  <input type="email" class="form-control" id="correo" name="correo" value="<?=$correo?>"  required>

  <label class="texto" for="usr">Dirección:</label>
  <input type="text" class="form-control" id="direccion" name="direccion" value="<?=$direccion?>" required>

  <label class="texto" for="usr">Código Postal:</label>
  <input type="text" class="form-control" id="cp" name="cp" value="<?=$cp?>" pattern="^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$" title="Tiene que tener 5 dígitos" required>

  <label class="texto" for="usr">Telefono:</label>
  <input type="text" class="form-control" id="telefono" name="telefono" value="<?=$telefono?>" pattern="^[\d]{3}[-]*([\d]{2}[-]*){2}[\d]{2}$" title="Tiene que tener 9 dígitos" required>


  <label class="texto" for="usr">Contraseña:</label>
  <input type="text" class="form-control" id="contraseña" name="contraseña" value="<?=$contraseña?>" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Tiene que contener una mayúscula, una minúcula y al menos un número" required>

  <br><br>

  <input type="submit"  class="btn btn-danger" value="GRABAR">
  <a href="../Controller/verUsuarios.php">Volver al listado</a>
</div>
</form>
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