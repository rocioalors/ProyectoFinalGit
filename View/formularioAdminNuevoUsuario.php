

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	 <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
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
            <a href="#" class="nav-item nav-link">Prestamos</a>
            <a href="#" class="nav-item nav-link">Ventas</a>
        </div>
        <div class="navbar-nav ml-auto">
          <td><a href="../Controller/cerrarSesion.php"><button type="button" class="btn btn-warning">Cerrar sesion</button></a>
        </div>
    </div>
</nav>



  <!--Código Formulario-->
<form action="../Controller/<?=$destino?>" enctype="multipart/form-data" method="POST">
<div class="container"> 
  <h1 class="titulo">Formulario Nuevo Usuario</h1>
  <div class="form-group">

 <input type="hidden" name="id" value="<?=$id?>">
  <label for="usr">Nombre:</label>
  <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$nombre?>" required>

  <label for="usr">DNI:</label>
  <input type="text" class="form-control" id="dni" name="dni" value="<?=$dni?>" required>

  <label for="usr">Correo:</label>
  <input type="text" class="form-control" id="correo" name="correo" value="<?=$correo?>" required>

  <label for="usr">Dirección:</label>
  <input type="text" class="form-control" id="direccion" name="direccion" value="<?=$direccion?>" required>

  <label for="usr">Telefono:</label>
  <input type="text" class="form-control" id="telefono" name="telefono" value="<?=$telefono?>" required>


  <label for="usr">Contraseña:</label>
  <input type="text" class="form-control" id="contraseña" name="contraseña" value="<?=$contraseña?>" required>

  <br><br>

  <input type="submit"  class="btn btn-danger" value="GRABAR">
</div>

</div>
</body>
</html>